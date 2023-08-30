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

namespace Plugin\ReferralCode\Service;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\Constant;
use Eccube\Entity\Category;
use Eccube\Entity\Customer;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Entity\Order;
use Eccube\Entity\OrderItem;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\OrderItemRepository;
use Eccube\Repository\ProductClassRepository;
use Eccube\Repository\TaxRuleRepository;
use Eccube\Service\TaxRuleService;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Entity\ReferralCodeOrder;
use Plugin\ReferralCode\Entity\ReferralCodeUser;
use Plugin\ReferralCode\Repository\ReferralCodeDetailRepository;
use Plugin\ReferralCode\Repository\ReferralCodeOrderRepository;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Repository\ReferralCodeUserRepository;
use Plugin\ReferralCode\Service\PurchaseFlow\Processor\ReferralCodeProcessor;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class ReferralCodeService.
 */
class ReferralCodeService
{
    /**
     * @var AuthorizationCheckerInterface
     */
    private $authorizationChecker;

    /**
     * @var ReferralCodeRepository
     */
    private $referralCodeRepository;

    /**
     * @var ReferralCodeDetailRepository
     */
    private $referralCodeDetailRepository;

    /**
     * @var ReferralCodeOrderRepository
     */
    private $referralCodeOrderRepository;

    /**
     * @var ReferralCodeUserRepository
     */
    private $referralCodeUserRepository;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var TaxRuleService
     */
    private $taxRuleService;

    /**
     * @var TaxRuleRepository
     */
    private $taxRuleRepository;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var OrderItemRepository
     */
    private $orderItemRepository;

    /**
     * @var ProductClassRepository
     */
    private $productClassRepository;

    /**
     * constructor.
     */
    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        ReferralCodeRepository $referralCodeRepository,
        ReferralCodeDetailRepository $referralCodeDetailRepository,
        ReferralCodeOrderRepository $referralCodeOrderRepository,
        ReferralCodeUserRepository $referralCodeUserRepository,
        CategoryRepository $categoryRepository,
        TaxRuleService $taxRuleService,
        TaxRuleRepository $taxRuleRepository,
        EntityManagerInterface $entityManager,
        OrderItemRepository $orderItemRepository,
        ProductClassRepository $productClassRepository
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->referralCodeRepository = $referralCodeRepository;
        $this->referralCodeDetailRepository = $referralCodeDetailRepository;
        $this->referralCodeOrderRepository = $referralCodeOrderRepository;
        $this->referralCodeUserRepository = $referralCodeUserRepository;
        $this->categoryRepository = $categoryRepository;
        $this->taxRuleService = $taxRuleService;
        $this->taxRuleRepository = $taxRuleRepository;
        $this->entityManager = $entityManager;
        $this->orderItemRepository = $orderItemRepository;
        $this->productClassRepository = $productClassRepository;
    }

    /**
     * ユーザーに紹介コードが紐づいているかをチェックする.
     *
     * @param $userId
     *
     * @return ユーザーが紹介コードと紐づいている場合、true それ以外の場合、false
     */
    public function isReferralCodeAssociatedWith($userId)
    {
        return $this->referralCodeUserRepository->isReferralCodeAssociatedWith($userId);
    }

    /**
     * 紹介コード情報を更新する.
     *
     * @param ReferralCode $ReferralCode 更新対象の紹介コード情報
     * @param array $newReferralCodeDetails 新しい紹介コード詳細のリスト
     *
     * @return bool
     */
    public function updateReferralCode($ReferralCode, $newReferralCodeDetails)
    {
        foreach ($this->referralCodeDetailRepository->findBy(['ReferralCode' => $ReferralCode]) as $ReferralCodeDetail) {
            $ReferralCode->removeReferralCodeDetail($ReferralCodeDetail);
            $this->entityManager->remove($ReferralCodeDetail);
        }
        foreach ($newReferralCodeDetails as $ReferralCodeDetail) {
            $ReferralCodeDetail->setReferralCode($ReferralCode);
            $ReferralCodeDetail->setReferralCodeType($ReferralCode->getReferralCodeType());
            $ReferralCodeDetail->setVisible(true);
            $ReferralCode->addReferralCodeDetail($ReferralCodeDetail);
            $this->entityManager->persist($ReferralCodeDetail);
        }
        $this->entityManager->persist($ReferralCode);
        $this->entityManager->flush();

        return true;
    }

    /**
     * 紹介コード情報を有効/無効にする.
     *
     * @param int $referral_code_id
     *
     * @return bool
     */
    public function enableReferralCode($referral_code_id)
    {
        $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $referral_code_id, 'visible' => true]);
        if (is_null($ReferralCode)) {
            return false;
        }
        $ReferralCode->setEnableFlag(!$ReferralCode->isEnable());
        $this->entityManager->persist($ReferralCode);
        $this->entityManager->flush($ReferralCode);

        return true;
    }

    /**
     * 紹介コード情報を削除する.
     *
     * @param int $referral_code_id
     *
     * @return bool
     */
    public function deleteReferralCode($referral_code_id)
    {
        $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $referral_code_id, 'visible' => true]);
        if (is_null($ReferralCode)) {
            return false;
        }

        $this->entityManager->getConnection()->beginTransaction();
        try {
            foreach ($ReferralCode->getReferralCodeDetails() as $ReferralCodeDetail) {
                $ReferralCodeDetail->setVisible(false);
                $this->entityManager->persist($ReferralCodeDetail);
            }
            $ReferralCode->setEnableFlag(false);
            $ReferralCode->setVisible(false);
            $this->entityManager->persist($ReferralCode);

            foreach ($this->referralCodeUserRepository->findBy(['referral_code' => $ReferralCode->getReferralCode()]) as $ReferralCodeUser) {
                $ReferralCodeUser->setVisible(false);
                $this->entityManager->persist($ReferralCodeUser);
            }

            $this->entityManager->flush();

            $this->entityManager->getConnection()->commit();
        } catch (Exception $e) {
            $this->entityManager->getConnection()->rollback();
            log_warning($e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * 紹介コードを生成する.
     *
     * @param int $length
     *
     * @return string
     */
    public function generateReferralCode($length = 12)
    {
        $referral_code = substr(base_convert(md5(uniqid()), 16, 36), 0, $length);
        return $referral_code;
    }

    /**
     * 注文に紹介コード対象商品が含まれているか確認する.
     *
     * @param ReferralCode $ReferralCode
     * @param ItemHolderInterface $Order
     *
     * @return array
     */
    public function existsReferralCodeProduct(ReferralCode $ReferralCode, ItemHolderInterface $Order)
    {
        $ReferralCodeProducts = [];
        if (!is_null($ReferralCode)) {
            if ($ReferralCode->getReferralCodeType() === ReferralCode::PRODUCT) {
                $ReferralCodeProducts = $this->containsProduct($ReferralCode, $Order);
            } elseif ($ReferralCode->getReferralCodeType() === ReferralCode::CATEGORY) {
                $ReferralCodeProducts = $this->containsCategory($ReferralCode, $Order);
            } elseif ($ReferralCode->getReferralCodeType() === ReferralCode::ALL) {
                // 一致する商品IDがあればtrueを返す
                foreach ($Order->getItems()->getProductClasses() as $detail) {
                    $ReferralCodeProducts = $this->getReferralCodeProducts($detail, $ReferralCodeProducts);
                }
            }
        }

        return $ReferralCodeProducts;
    }

    /**
     * 紹介コード利用ユーザーを保存する.
     *
     * @param integer $userId
     * @param string $referral_code
     *
     * @return mixed|null
     */
    public function saveReferralCodeUser($userId, $referral_code)
    {
        $ReferralCodeUser = $this->referralCodeUserRepository->findOneBy(['user_id' => $userId]);
        if (is_null($ReferralCodeUser)) {
            $ReferralCodeUser = new ReferralCodeUser();
            $ReferralCodeUser->setUserId($userId);
        }
        $ReferralCodeUser->setReferralCode($referral_code);
        $ReferralCodeUser->setVisible(true);
        $this->entityManager->persist($ReferralCodeUser);
        $this->entityManager->flush($ReferralCodeUser);
        return $ReferralCodeUser;
    }

    /**
     * 紹介コード受注情報を保存する.
     *
     * @param Order    $Order
     * @param ReferralCode   $ReferralCode
     * @param string   $referral_code
     * @param Customer $Customer
     * @param int      $discount
     */
    public function saveReferralCodeOrder(Order $Order, ReferralCode $ReferralCode, $referral_code, Customer $Customer, $discount)
    {
        if (is_null($Order)) {
            return;
        }

        $ReferralCodeOrder = $this->referralCodeOrderRepository->findOneBy(array(
            'pre_order_id' => $Order->getPreOrderId(),
        ));
        if (is_null($ReferralCodeOrder)) {
            $ReferralCodeOrder = new ReferralCodeOrder();
            $ReferralCodeOrder->setOrderId($Order->getId());
            $ReferralCodeOrder->setPreOrderId($Order->getPreOrderId());
            $ReferralCodeOrder->setVisible(true);
        }

        if (is_null($ReferralCode) || empty($referral_code)) {
            // 紹介コードがない または 紹介コードが空の場合
            $ReferralCodeOrder->setReferralCode($referral_code);
            $ReferralCodeOrder->setReferralCodeId(null);
        } elseif ( empty($this->existsReferralCodeProduct($ReferralCode, $Order)) ) {
            // 紹介コード情報があるが、対象商品がない場合は紹介コードIDにnullを設定する。
            $ReferralCodeOrder->setReferralCode($ReferralCode->getReferralCode());
            $ReferralCodeOrder->setReferralCodeId(null);
        } else {
            $ReferralCodeOrder->setReferralCode($ReferralCode->getReferralCode());
            $ReferralCodeOrder->setReferralCodeId($ReferralCode->getId());
        }
        $this->entityManager->flush($Order);

        $ReferralCodeOrder->setReferralCodeName($ReferralCode->getReferralCodeName());
        $ReferralCodeOrder->setOrderChangeStatus(false);
        // ログイン済みの場合は, user_id取得
        if ($this->authorizationChecker->isGranted('ROLE_USER')) {
            $ReferralCodeOrder->setUserId($Customer->getId());
        } else {
            $ReferralCodeOrder->setEmail($Customer->getEmail());
        }

        // 割引金額をセット
        $ReferralCodeOrder->setDiscount($discount);
        $this->entityManager->persist($ReferralCodeOrder);
        $this->entityManager->flush($ReferralCodeOrder);
    }

    /**
     * 合計、値引きを再計算する.
     *
     * @param Order  $Order
     * @param ReferralCode $ReferralCode
     * @param array  $ReferralCodeProducts
     *
     * @return float|int|string
     *
     * @throws \Doctrine\ORM\NoResultException
     */
    public function recalcOrder(Order $Order, ReferralCode $ReferralCode, $ReferralCodeProducts)
    {
        $discount = 0;
        // 紹介コードが存在する場合カートに入っている商品の値引き額を設定する
        if ($ReferralCode) {
            // 対象商品の存在確認.
            // 割引対象商品が存在する場合は値引き額を取得する
            if ($this->existsReferralCodeProduct($ReferralCode, $Order)) {
                // 割引対象商品がある場合は値引き額を計算する
                if ($ReferralCode->getDiscountType() === ReferralCode::DISCOUNT_PRICE) {
                    $discount = $ReferralCode->getDiscountPrice();
                } else {
                    // 値引き前の金額で割引率を算出する
                    $total = 0;
                    foreach ($ReferralCodeProducts as $productClassId => $value) {
                        // 税率が取得できない場合は TaxRule から取得し直す
                        if ($value['tax_rate'] < 1 || is_null($value['rounding_type_id']) ) {
                            $ProductClass = $this->productClassRepository->find($productClassId);
                            $TaxRule = $this->taxRuleRepository->getByRule($ProductClass->getProduct(), $ProductClass);
                            $value['tax_rate'] = $TaxRule->getTaxRate();
                            $value['rounding_type_id'] = $TaxRule->getRoundingType()->getId();
                        }
                        $total +=
                            ($value['price'] + $this->taxRuleService->calcTax($value['price'], $value['tax_rate'], $value['rounding_type_id'])) *
                            $value['quantity'];
                    }
                    $DefaultTaxRule = $this->taxRuleRepository->getByRule();
                    // 小数点以下は四捨五入
                    $discount = $this->taxRuleService->calcTax(
                        $total,
                        $ReferralCode->getDiscountRate(),
                        $DefaultTaxRule->getRoundingType()->getId(),
                        $DefaultTaxRule->getTaxAdjust()
                    );
                }
            }
        }

        return $discount;
    }

    /**
     * check referral_code lower limit.
     *
     * @param array $referralCodeProducts
     * @param int   $lowerLimitMoney
     *
     * @return bool
     */
    public function isLowerLimitReferralCode($referralCodeProducts, $lowerLimitMoney)
    {
        $subTotal = 0;
        foreach ($referralCodeProducts as $key => $value) {
            $subTotal += $value['price'] * $value['quantity'];
        }

        if ($subTotal < $lowerLimitMoney && $subTotal != 0) {
            return false;
        }

        return true;
    }

    /**
     * 紹介コード受注情報を取得する.
     *
     * @param string $preOrderId
     *
     * @return null|object
     */
    public function getReferralCodeOrder($preOrderId)
    {
        $ReferralCodeOrder = $this->referralCodeOrderRepository->findOneBy([
            'pre_order_id' => $preOrderId,
        ]);
        return $ReferralCodeOrder;
    }

    /**
     *  ユーザは紹介コード1回のみ利用できる.
     *
     * ※ 2020/06/02 現在、本メソッドは利用されない。
     *
     * @param string   $referral_code
     * @param Customer $Customer
     *
     * @return bool
     */
    public function checkReferralCodeUsedOrNot($referral_code, Customer $Customer)
    {
        if ($this->authorizationChecker->isGranted('ROLE_USER')) {
            $result = $this->referralCodeOrderRepository->findUseReferralCode($referral_code, $Customer->getId());
        } else {
            $result = $this->referralCodeOrderRepository->findUseReferralCode($referral_code, $Customer->getEmail());
        }

        if (!$result) {
            return false;
        }

        return true;
    }

    /**
     * 紹介コードが未入力または、紹介コードを登録後に再度別の紹介コードが設定された場合、
     * 既存の紹介コードを情報削除.
     *
     * @param ItemHolderInterface       $Order
     */
    public function removeReferralCodeOrder(ItemHolderInterface $Order)
    {
        // 紹介コードが未入力で紹介コード情報が存在すれば紹介コード情報を削除
        /** @var ReferralCodeOrder $ReferralCodeOrder */
        $ReferralCodeOrder = $this->referralCodeOrderRepository->getReferralCodeOrder($Order->getPreOrderId());
        if ($ReferralCodeOrder) {
            $OrderItems = $this->orderItemRepository->findBy(['processor_name' => ReferralCodeProcessor::class, 'Order' => $Order]);
            foreach ($OrderItems as $OrderItem) {
                $Order->removeOrderItem($OrderItem);
                $this->entityManager->remove($OrderItem);
                $this->entityManager->flush($OrderItem);
            }

            $this->entityManager->remove($ReferralCodeOrder);
            $this->entityManager->flush($ReferralCodeOrder);

            $this->entityManager->flush($Order);
        }
    }

    /**
     * ユーザーに紐づいた紹介コードを削除
     *
     * @param int $userId
     */
    public function removeReferralCodeUser($userId)
    {
        $ReferralCodeUser = $this->referralCodeUserRepository->findOneBy(['user_id' => $userId]);
        $ReferralCodeUser->setVisible(false);
        $this->entityManager->persist($ReferralCodeUser);
        $this->entityManager->flush($ReferralCodeUser);
    }

    /**
     *  紹介コード利用可能枚数がまだ残っているかどうか
     *
     * @param string $referral_code
     *
     * @return bool 紹介コードの利用可能枚数が一枚以上の時にtrueを返す
     */
    public function isReferralCodeUseTimeRemaining($referral_code)
    {
        $ReferralCode = $this->referralCodeRepository->findOneBy(['visible' => true, 'referral_code' => $referral_code]);
        // 紹介コードの発行枚数は購入完了時に減算される、一枚以上残っていれば利用できる
        return $ReferralCode->getReferralCodeUseTime() >= 1;
    }

    /**
     * 商品が紹介コード適用の対象か調査する.
     *
     * @param ReferralCode $ReferralCode
     * @param ItemHolderInterface $Order
     *
     * @return array
     */
    private function containsProduct(ReferralCode $ReferralCode, ItemHolderInterface $Order)
    {
        // 紹介コードの対象商品IDを配列にする
        $targetProductIds = [];
        $ReferralCodeProducts = [];
        foreach ($ReferralCode->getReferralCodeDetails() as $detail) {
            $targetProductIds[] = $detail->getProduct()->getId();
        }

        // 一致する商品IDがあればtrueを返す
        foreach ($Order->getProductOrderItems() as $orderItem) {
            if (in_array($orderItem->getProduct()->getId(), $targetProductIds, true)) {
                $ReferralCodeProducts = $this->getReferralCodeProducts($orderItem, $ReferralCodeProducts);
            }
        }

        return $ReferralCodeProducts;
    }

    /**
     * カテゴリが紹介コード適用の対象か調査する.
     * 下位のカテゴリから上位のカテゴリに向けて検索する.
     *
     * @param ReferralCode $ReferralCode
     * @param ItemHolderInterface $Order
     *
     * @return array
     */
    private function containsCategory(ReferralCode $ReferralCode, ItemHolderInterface $Order)
    {
        // 紹介コードの対象カテゴリIDを配列にする
        $targetCategoryIds = array();
        $ReferralCodeProducts = array();
        foreach ($ReferralCode->getReferralCodeDetails() as $detail) {
            $targetCategoryIds[] = $detail->getCategory()->getId();
        }

        // 受注データからカテゴリIDを取得する
        foreach ($Order->getProductOrderItems() as $orderItem) {
            foreach ($orderItem->getProduct()->getProductCategories() as $productCategory) {
                if ( $this->existsDepthCategory($targetCategoryIds, $productCategory->getCategory()) ) {
                    $ReferralCodeProducts = $this->getReferralCodeProducts($orderItem, $ReferralCodeProducts);
                    break;
                }
            }
        }

        return $ReferralCodeProducts;
    }

    /**
     * 紹介コード対象のカテゴリが存在するか確認する.
     *
     * @param int      $targetCategoryIds
     * @param Category $Category
     *
     * @return bool
     */
    private function existsDepthCategory(&$targetCategoryIds, Category $Category)
    {
        // Categoryがnullならfalse
        if (is_null($Category)) {
            return false;
        }

        // 対象カテゴリか確認
        if (in_array($Category->getId(), $targetCategoryIds)) {
            return true;
        }

        // Categoryをテーブルから取得
        if (is_null($Category->getParent())) {
            return false;
        }

        // 親カテゴリをテーブルから取得
        $ParentCategory = $this->categoryRepository->find($Category->getParent());
        if ($ParentCategory) {
            return false;
        }

        return $this->existsDepthCategory($targetCategoryIds, $ParentCategory);
    }

    /**
     * @param OrderItem $orderItem
     * @param array $ReferralCodeProducts
     *
     * @return mixed
     */
    private function getReferralCodeProducts(OrderItem $orderItem, array $ReferralCodeProducts = [])
    {
        if (array_key_exists($orderItem->getProductClass()->getId(), $ReferralCodeProducts)) {
            $ReferralCodeProducts[$orderItem->getProductClass()->getId()]['quantity'] += $orderItem->getQuantity();
        } else {
            $ReferralCodeProducts[$orderItem->getProductClass()->getId()] = [
                'price' => $orderItem->getPrice(),
                'quantity' => $orderItem->getQuantity(),
                // tax_rate, rounding_type_idは複数配送の個数変更時に取得できない. recalcOrderで取得し直している
                // ref: https://github.com/EC-CUBE/coupon-plugin/pull/106/commits/d47f60745b283023cd7a990c609e6399701ddce1
                'tax_rate' => $orderItem->getTaxRate(),
                'rounding_type_id' => $orderItem->getRoundingType() ? $orderItem->getRoundingType()->getId() : null,
            ];
        }

        return $ReferralCodeProducts;
    }
}
