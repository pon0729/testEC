<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ReferralCode\Service\PurchaseFlow\Processor;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Eccube\Annotation\ShoppingFlow;
use Eccube\Entity\ItemInterface;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Entity\Master\OrderItemType;
use Eccube\Entity\Master\TaxType;
use Eccube\Entity\Master\TaxDisplayType;
use Eccube\Entity\Order;
use Eccube\Entity\OrderItem;
use Eccube\Repository\TaxRuleRepository;
use Eccube\Service\PurchaseFlow\ItemHolderPreprocessor;
use Eccube\Service\PurchaseFlow\ItemHolderValidator;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseProcessor;
use Eccube\Service\TaxRuleService;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Entity\ReferralCodeOrder;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * 紹介コードの状態を制御する.
 *
 * @ShoppingFlow
 */
class ReferralCodeProcessor extends ItemHolderValidator implements ItemHolderPreprocessor, PurchaseProcessor
{
    /**
     * @var AuthorizationCheckerInterface
     */
    private $authorizationChecker;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var TaxRuleService
     */
    protected $taxRuleService;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    /**
     * @var TaxRuleRepository
     */
    protected $taxRuleRepository;

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    /**
     * ReferralCodeStateProcessor constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        EntityManagerInterface $entityManager,
        TaxRuleService $taxRuleService,
        ReferralCodeService $referralCodeService,
        TaxRuleRepository $taxRuleRepository,
        ReferralCodeRepository $referralCodeRepository
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->entityManager = $entityManager;
        $this->taxRuleService = $taxRuleService;
        $this->referralCodeService = $referralCodeService;
        $this->taxRuleRepository = $taxRuleRepository;
        $this->referralCodeRepository = $referralCodeRepository;
    }

    /*
     * ItemHolderPreprocessor
     */

    /**
     * 紹介コード利用の場合は明細を追加する.
     * {@inheritdoc}
     */
    public function process(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$this->supports($itemHolder)) {
            return;
        }
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($itemHolder->getPreOrderId());
        if ($ReferralCodeOrder) {
            // 既存の紹介コードを削除し明細追加
            $this->removeReferralCodeDiscountItem($itemHolder);
            if ( ((float) $ReferralCodeOrder->getDiscount()) > 0 ) {
                $this->addReferralCodeDiscountItem($itemHolder, $ReferralCodeOrder);
            }
        } else {
            $this->removeReferralCodeDiscountItem($itemHolder);
        }
    }

    /*
     * ItemHolderValidator
     */

    /**
     * 紹介コード利用可否判定.
     * {@inheritdoc}
     */
    protected function validate(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$this->supports($itemHolder)) {
            return;
        }
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($itemHolder->getPreOrderId());
        if (!$ReferralCodeOrder) {
            return;
        }

        $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($ReferralCodeOrder->getReferralCode());
        if (!$ReferralCode) {
            $this->clearReferralCode($itemHolder);
            $this->throwInvalidItemException(trans('referral_code.shopping.error.notfound'), null, true);
        }

        /** @var Customer $Customer */
        $Customer = $itemHolder->getCustomer();
        if (!$Customer && $ReferralCode->getReferralCodeMember()) {
            $this->clearReferralCode($itemHolder);
            $this->throwInvalidItemException(trans('referral_code.shopping.error.member'));
        }

        $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $itemHolder);
        $existReferralCode = sizeof($referralCodeProducts) > 0;
        if (!$existReferralCode) {
            // 対象商品がない場合でも紹介コードを適用する必要があるため、clearReferralCode()を実施しない。
            /*
            $this->clearReferralCode($itemHolder);
            $this->throwInvalidItemException(trans('referral_code.shopping.error.referral_code_use_time'), null, true);
            */
        }

        $discount = $this->referralCodeService->recalcOrder($itemHolder, $ReferralCode, $referralCodeProducts);
        /* 下記は定期購入の際の割引率変更により金額ズレが発生するため、バリデーションから外した。 */
        /*
        if ($discount != $ReferralCodeOrder->getDiscount()) {
            $this->clearReferralCode($itemHolder);
            $this->throwInvalidItemException(trans('referral_code.shopping.error.changeorder'), null, true);
        }
        */

        $lowerLimit = $ReferralCode->getReferralCodeLowerLimit();
        $checkLowerLimit = $this->referralCodeService->isLowerLimitReferralCode($referralCodeProducts, $lowerLimit);
        if (!$checkLowerLimit) {
            $this->clearReferralCode($itemHolder);
            $message = trans('referral_code.shopping.error.lowerlimit', ['%lowerLimit%' => number_format($lowerLimit)]);
            $this->throwInvalidItemException($message, null, true);
        }

        $isReferralCodeUseTimeRemaining = $this->referralCodeService->isReferralCodeUseTimeRemaining($ReferralCodeOrder->getReferralCode());
        if (!$isReferralCodeUseTimeRemaining) {
            $this->clearReferralCode($itemHolder);
            if ($this->authorizationChecker->isGranted('ROLE_USER')) {
                $this->referralCodeService->removeReferralCodeUser($itemHolder->getCustomer()->getId());
            }
            $this->throwInvalidItemException(trans('referral_code.shopping.error.referral_code_use_time'), null, true);
        }

        if ($itemHolder->getSubTotal() < $discount && $existReferralCode) {
            $this->throwInvalidItemException(trans('referral_code.shopping.error.minus'), null, true);
        }
    }

    /*
     * PurchaseProcessor
     */

    /**
     * 紹介コードを使用状態にする.
     * {@inheritdoc}
     */
    public function prepare(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$this->supports($itemHolder)) {
            return;
        }

        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($itemHolder->getPreOrderId());
        if (!$ReferralCodeOrder) {
            return;
        }
        $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($ReferralCodeOrder->getReferralCode());
        if (!$ReferralCode) {
            return;
        }

        $ReferralCodeOrder->setReferralCodeName($ReferralCode->getReferralCodeName());
        $ReferralCodeOrder->setOrderDate(new \DateTime());
        $this->entityManager->flush($ReferralCodeOrder);

        $ReferralCode->setReferralCodeUseTime($ReferralCode->getReferralCodeUseTime() - 1);
        $this->entityManager->flush($ReferralCode);
    }

    /**
     * {@inheritdoc}
     */
    public function commit(ItemHolderInterface $target, PurchaseContext $context)
    {
        // quiet.
    }

    /**
     * 紹介コードを取り消す.
     * {@inheritdoc}
     */
    public function rollback(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$this->supports($itemHolder)) {
            return;
        }

        $this->referralCodeService->removeReferralCodeOrder($itemHolder);
    }

    /**
     * Processorが実行出来るかどうかを返す.
     *
     * $itemHolderがOrderエンティティのインスタンスかどうかをチェックする
     *
     * @param ItemHolderInterface $itemHolder
     *
     * @return bool
     */
    private function supports(ItemHolderInterface $itemHolder)
    {
        if (!$itemHolder instanceof Order) {
            return false;
        }

        return true;
    }

    /**
     * 既存の紹介コード明細を削除する.
     *
     * @param ItemHolderInterface $itemHolder
     */
    private function removeReferralCodeDiscountItem(ItemHolderInterface $itemHolder)
    {
        foreach ($itemHolder->getItems() as $item) {
            if (ReferralCodeProcessor::class === $item->getProcessorName()) {
                $itemHolder->removeOrderItem($item);
                $this->entityManager->remove($item);
            }
        }
    }

    /**
     * 明細追加処理.
     *
     * 値引額の場合の計算方法
     * 紹介コードで設定した割引価格で、紹介コード値引の明細を生成する(税込価格、税率0%、課税)
     * 税込1080円の商品に、1000円の割引を使用すると、980円の支払いになるイメージ
     *
     * 明細ごとに税込の値引額を集計し、紹介コード値引の明細を生成する(税込価格、税率0%、課税)
     * 軽減税率適用により税率が混在する場合もあるため、税込価格、税率0%で明細を生成する
     * 税込1080円の商品に、10%OFFの紹介コードを使用すると、100円の値引きになり、980円の支払いになるイメージ
     *
     * @see https://github.com/EC-CUBE/coupon-plugin/pull/77
     *
     * @param ItemHolderInterface $itemHolder
     * @param ReferralCodeOrder $ReferralCodeOrder
     * @param integer $discount
     */
    private function addReferralCodeDiscountItem(ItemHolderInterface $itemHolder, ReferralCodeOrder $ReferralCodeOrder)
    {
        $productName = trans('referral_code.order_item.discount.product_name');
        $taxDisplayType = TaxDisplayType::INCLUDED; // 税込
        $taxType = TaxType::NON_TAXABLE; // 不課税
        $DiscountType = $this->entityManager->find(OrderItemType::class, OrderItemType::DISCOUNT);
        $TaxInclude = $this->entityManager->find(TaxDisplayType::class, $taxDisplayType);
        $Taxation = $this->entityManager->find(TaxType::class, $taxType);

        $OrderItem = new OrderItem();
        $OrderItem->setProductName($productName)
            ->setPrice($ReferralCodeOrder->getDiscount() * -1) /* 定期配送の場合、ReferralCodeEvent側で割引率を再設定する */
            ->setQuantity(1)
            ->setTax(0)
            ->setTaxRate(0)
            ->setTaxRuleId(null)
            ->setRoundingType(null)
            ->setOrderItemType($DiscountType)
            ->setTaxDisplayType($TaxInclude)
            ->setTaxType($Taxation)
            ->setOrder($itemHolder)
            ->setProcessorName(ReferralCodeProcessor::class);
        $itemHolder->addItem($OrderItem);
    }

    protected function clearReferralCode(ItemHolderInterface $Order)
    {
        // TODO エラーが発生した場合、前回設定されている紹介コードがあればその金額を再設定する
        $this->referralCodeService->removeReferralCodeOrder($Order);
    }
}
