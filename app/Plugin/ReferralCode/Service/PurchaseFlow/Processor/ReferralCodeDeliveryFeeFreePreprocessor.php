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

use Eccube\Annotation\ShoppingFlow;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Entity\Order;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Service\PurchaseFlow\ItemHolderPreprocessor;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\TaxRuleService;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Plugin\ReferralCode\Repository\ReferralCodeConfigRepository;

/**
 * 紹介コード利用時の送料無料条件を適用する.
 *
 * @ShoppingFlow
 */
class ReferralCodeDeliveryFeeFreePreprocessor implements ItemHolderPreprocessor
{
    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    /**
     * @var BaseInfo
     */
    protected $BaseInfo;

    /**
     * @var ReferralCodeConfigRepository
     */
    protected $referralCodeConfigRepository;

    /**
     * constructor.
     */
    public function __construct(
        ReferralCodeService $referralCodeService,
        BaseInfoRepository $baseInfoRepository,
        ReferralCodeConfigRepository $referralCodeConfigRepository
    ) {
        $this->referralCodeService = $referralCodeService;
        $this->BaseInfo = $baseInfoRepository->get();
        $this->referralCodeConfigRepository = $referralCodeConfigRepository;
    }

    /*
     * ItemHolderPreprocessor
     */

    /**
     * 紹介コード利用時の送料無料条件に合致する場合、受注項目の送料を無料にする
     * {@inheritdoc}
     */
    public function process(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$this->supports($itemHolder)) {
            return;
        }
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($itemHolder->getPreOrderId());
        if (is_null($ReferralCodeOrder)) {
            return;
        }

        $isDeliveryFree = false;
        if ($this->BaseInfo->getDeliveryFreeAmount()) {
            $referral_code_side_delivery_free_amount = $this->referralCodeConfigRepository->getDeliveryFreeAmount(
                $default_value = $this->BaseInfo->getDeliveryFreeAmount()
            );
            if ($referral_code_side_delivery_free_amount) {
                $delivery_free_amount = intval($referral_code_side_delivery_free_amount, 10);
                // 紹介コード設定画面の送料無料（金額）を超えている
                if ($delivery_free_amount <= $itemHolder->getSubTotal()) {
                    $isDeliveryFree = true;
                }
            }
        }

        // 送料無料条件に合致した場合は、送料明細の個数を0に設定
	$delivery_fee_quantity = $isDeliveryFree ? 0 : 1;
        foreach ($itemHolder->getItems() as $item) {
            if ($item->isDeliveryFee()) {
                $item->setQuantity($delivery_fee_quantity);
            }
        }
        // 元となるItemHolderの送料明細も更新しないと2重で
        // 「送料が更新されました。金額をご確認ください。」が表示されるので対応。。。
        foreach ($context->getOriginHolder()->getItems() as $originalItem) {
            if ($originalItem->isDeliveryFee()) {
                $originalItem->setQuantity($delivery_fee_quantity);
            }
        }
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
}
