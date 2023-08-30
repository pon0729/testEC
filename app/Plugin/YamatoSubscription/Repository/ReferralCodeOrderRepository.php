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

namespace Plugin\YamatoSubscription\Repository;

use Eccube\Common\Constant;
use Eccube\Entity\Master\OrderItemType as OrderItemTypeMaster;
use Eccube\Repository\AbstractRepository;
use Plugin\YamatoSubscription\Entity\YamatoSubs;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ReferralCodeOrderRepository.
 */
class ReferralCodeOrderRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, YamatoSubs::class);
    }

    public function existsReferralCodePlugin() {
        return $this->getEntityManager()->getConnection()->getSchemaManager()->tablesExist(['plg_referral_code_order']) &&
            class_exists('\Plugin\ReferralCode\Entity\ReferralCodeOrder') &&
            class_exists('\Plugin\ReferralCode\Repository\ReferralCodeOrderRepository')
        ;
    }

    public function findReferralCodeOrderBy($Order) {
        if (!$this->existsReferralCodePlugin()) {
            return null;
        }
        $referralCodeOrderRepository =
            $this->getEntityManager()->getRepository(\Plugin\ReferralCode\Entity\ReferralCodeOrder::class);

        return $referralCodeOrderRepository->findOneBy(['order_id' => $Order, 'visible' => true]);
    }

    public function register($previousOrder, $Order, $YamatoSubsUsersReferralCodeOrder) {
        if (!$this->existsReferralCodePlugin()) {
            return null;
        }

        $now = new \DateTime();
        $discount = 0;

        $ReferralCodeOrderItem = current(
            array_filter($Order->getOrderItems()->toArray(), function($OrderItem) {
                return strpos($OrderItem->getProcessorName(), 'ReferralCodeProcessor') !== false;
            })
        );
        if ($ReferralCodeOrderItem) {
            // order_itemの割引金額を利用（商品変更画面で金額を変更される可能性があるため）
            $discount = abs($ReferralCodeOrderItem->getPriceIncTax());
        } else {
            // 商品明細の名称が"割引"でProcessorNameが空のデータもあるため
            // その場合もplg_referral_code_orderに保存できるよう対応
            $referralCodeOrderRepository =
                $this->getEntityManager()->getRepository(\Plugin\ReferralCode\Entity\ReferralCodeOrder::class);

            $previousReferralCodeOrder =
                $referralCodeOrderRepository->findOneBy(['visible' => true, 'order_id' => $previousOrder->getId()]);
            if (!$previousReferralCodeOrder) {
                return null;
            }

            $ReferralCodeOrderItem = current(
                array_filter($Order->getOrderItems()->toArray(), function($OrderItem) {
                    return $OrderItem->getOrderItemType()->getId() === OrderItemTypeMaster::DISCOUNT;
                })
            );

            if ($ReferralCodeOrderItem) {
                $discount = abs($ReferralCodeOrderItem->getPriceIncTax());
            }
        }

        $ReferralCodeOrder = new \Plugin\ReferralCode\Entity\ReferralCodeOrder();
        $ReferralCodeOrder
            ->setReferralCodeId($YamatoSubsUsersReferralCodeOrder->getReferralCodeId())
            ->setReferralCode($YamatoSubsUsersReferralCodeOrder->getReferralCode())
            ->setReferralCodeName($YamatoSubsUsersReferralCodeOrder->getReferralCodeName())
            ->setUserId($YamatoSubsUsersReferralCodeOrder->getUserId())
            ->setEmail($YamatoSubsUsersReferralCodeOrder->getEmail())
            ->setOrderId($Order->getId())
            ->setPreOrderId($Order->getPreOrderId())
            ->setOrderDate($Order->getOrderDate())
            ->setDiscount($discount)
            ->setVisible($YamatoSubsUsersReferralCodeOrder->isVisible())
            ->setOrderChangeStatus($YamatoSubsUsersReferralCodeOrder->getOrderChangeStatus())
            ->setCreateDate($now)
            ->setUpdateDate($now)
        ;

        return $ReferralCodeOrder;
    }
}
