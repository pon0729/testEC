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
use Eccube\Annotation\OrderFlow;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\Order;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Service\PurchaseFlow\ItemHolderPreprocessor;
use Eccube\Service\PurchaseFlow\ItemHolderValidator;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseProcessor;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;

/**
 * 紹介コードの状態を制御する.
 *
 * @OrderFlow
 */
class ReferralCodeStateProcessor extends ItemHolderValidator implements ItemHolderPreprocessor, PurchaseProcessor
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

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
        EntityManagerInterface $entityManager,
        ReferralCodeService $referralCodeService,
        ReferralCodeRepository $referralCodeRepository
    ) {
        $this->entityManager = $entityManager;
        $this->referralCodeService = $referralCodeService;
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

        $orderStatusId = $itemHolder->getOrderStatus()->getId();
        $isChanged = $ReferralCodeOrder->getOrderChangeStatus();
        if ($orderStatusId == OrderStatus::CANCEL
            || $orderStatusId == OrderStatus::PROCESSING
            || $orderStatusId == OrderStatus::RETURNED) {
            if (!$isChanged) {
                /** @var ReferralCode $ReferralCode */
                $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $ReferralCodeOrder->getReferralCodeId()]);
                if ($ReferralCode) {
                    $ReferralCodeOrder->setOrderDate(null);
                    $ReferralCodeOrder->setOrderChangeStatus(true);
                    $this->entityManager->persist($ReferralCodeOrder);
                    $this->entityManager->flush($ReferralCodeOrder);

                    $referralCodeUseTime = $ReferralCode->getReferralCodeUseTime() + 1;
                    $referralCodeRelease = $ReferralCode->getReferralCodeRelease();
                    if ($referralCodeUseTime <= $referralCodeRelease) {
                        $ReferralCode->setReferralCodeUseTime($referralCodeUseTime);
                    } else {
                        $ReferralCode->setReferralCodeUseTime($referralCodeRelease);
                    }
                    $this->entityManager->persist($ReferralCode);
                    $this->entityManager->flush($ReferralCode);
                }
            }
        }
        if ($orderStatusId != OrderStatus::CANCEL
            && $orderStatusId != OrderStatus::PROCESSING
            && $orderStatusId != OrderStatus::RETURNED) {
            if ($isChanged) {
                /** @var ReferralCode $ReferralCode */
                $ReferralCode = $this->referralCodeRepository->findOneBy(['id' => $ReferralCodeOrder->getReferralCodeId()]);
                if ($ReferralCode) {
                    $ReferralCodeOrder->setOrderDate(new \DateTime());
                    $ReferralCodeOrder->setOrderChangeStatus(false);
                    $this->entityManager->persist($ReferralCodeOrder);
                    $this->entityManager->flush($ReferralCodeOrder);

                    $ReferralCode->setReferralCodeUseTime($ReferralCode->getReferralCodeUseTime() - 1);
                    $this->entityManager->persist($ReferralCode);
                    $this->entityManager->flush($ReferralCode);
                }
            }
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
    }

    /*
     * PurchaseProcessor
     */

    /**
     * {@inheritdoc}
     */
    public function prepare(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$this->supports($itemHolder)) {
            return;
        }
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
        // 利用したポイントをユーザに戻す.
        if (!$this->supports($itemHolder)) {
            return;
        }

        $this->referralCodeService->removeReferralCodeOrder($itemHolder);
    }

    /**
     * Processorが実行出来るかどうかを返す.
     *
     * 以下を満たす場合に実行できる.
     *
     * - ポイント設定が有効であること.
     * - $itemHolderがOrderエンティティであること.
     * - 会員のOrderであること.
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

        switch ($itemHolder->getOrderStatus()->getId()) {
            case OrderStatus::NEW:
            case OrderStatus::PAID:
            case OrderStatus::IN_PROGRESS:
            case OrderStatus::DELIVERED:
            case OrderStatus::CANCEL:
            case OrderStatus::RETURNED:
                break;
            default:
                return false;
        }
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($itemHolder->getPreOrderId());
        if (!$ReferralCodeOrder) {
            return false;
        }

        return true;
    }
}
