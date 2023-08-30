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

use Eccube\Entity\ItemHolderInterface;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Eccube\Service\PurchaseFlow\PurchaseFlowResult;
use Plugin\ReferralCode\Service\PurchaseFlow\Processor\ReferralCodeProcessor;

/**
 * Class PurchaseFlowExecutionService.
 */
class PurchaseFlowExecutionService
{
    /**
     * @var PurchaseFlow
     */
    protected $purchaseFlow;

    /**
     * constructor.
     */
    public function __construct(
        PurchaseFlow $purchaseFlow,
        ReferralCodeProcessor $referralCodeProcessor
    ) {
        $this->purchaseFlow = $purchaseFlow;
        $this->referralCodeProcessor = $referralCodeProcessor;
    }

    /**
     * @param ItemHolderInterface $itemHolder
     *
     * @return PurchaseFlowResult|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function executePurchaseFlow(ItemHolderInterface $itemHolder)
    {
        $purchaseContext = new PurchaseContext(clone $itemHolder, $itemHolder->getCustomer());

        // validate()メソッドでprocessor実施されるかと思ったが実施されないので、手動でprocess()を実行...
        $this->referralCodeProcessor->process($itemHolder, $purchaseContext);

        /** @var PurchaseFlowResult $flowResult */
        $flowResult = $this->purchaseFlow->validate($itemHolder, $purchaseContext);

        foreach ($flowResult->getWarning() as $warning) {
            log_info('[注文手続] [Warning] '.$warning->getMessage());
        }
        foreach ($flowResult->getErrors() as $error) {
            log_info('[注文手続] [Error] '.$error->getMessage());
        }

        return $flowResult;
    }
}
