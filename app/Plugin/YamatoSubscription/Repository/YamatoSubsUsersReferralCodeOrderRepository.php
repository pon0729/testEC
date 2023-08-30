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

use Eccube\Repository\AbstractRepository;
use Plugin\ReferralCode\Entity\ReferralCodeOrder;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersReferralCodeOrder;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsUsersReferralCodeOrderRepository.
 */
class YamatoSubsUsersReferralCodeOrderRepository extends AbstractRepository
{
    /**
     * @var ReferralCodeOrderRepository
     */
    protected $referralCodeOrderRepository;

    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry,
        ReferralCodeOrderRepository $referralCodeOrderRepository
    ) {
        parent::__construct($registry, YamatoSubsUsersReferralCodeOrder::class);
        $this->referralCodeOrderRepository = $referralCodeOrderRepository;
    }

    public function findReferralCodeOrderBy($YamatoSubsUsersOrder) {
        return $this->findOneBy(['YamatoSubsUsersOrder' => $YamatoSubsUsersOrder]);
    }

    public function register($Order, $YamatoSubsUsersOrder) {
        $YamatoSubsUsersReferralCodeOrder = $this->createYamatoSubsUsersReferralCodeOrderFrom($Order, $YamatoSubsUsersOrder);
        if (!$YamatoSubsUsersReferralCodeOrder) {
            return null;
        }

        $em = $this->getEntityManager();
        $em->persist($YamatoSubsUsersReferralCodeOrder);
        $em->flush();

        return $YamatoSubsUsersReferralCodeOrder;
    }

    public function registerReferralCodeOrderFrom($previousOrder, $Order, $YamatoSubsUsersReferralCodeOrder) {
        if (!$YamatoSubsUsersReferralCodeOrder) {
            return null;
        }

        $ReferralCodeOrder = $this->referralCodeOrderRepository->register($previousOrder, $Order, $YamatoSubsUsersReferralCodeOrder);
        if (!$ReferralCodeOrder) {
            return null;
        }

        $em = $this->getEntityManager();
        $em->persist($ReferralCodeOrder);
        $em->flush();

        return $ReferralCodeOrder;
    }

    public function updateByNewReferralCodeOrder($YamatoSubsUsersReferralCodeOrder, $ReferralCodeOrder) {
        if (!$YamatoSubsUsersReferralCodeOrder || !$ReferralCodeOrder) {
            return null;
        }

        $em = $this->getEntityManager();
        $YamatoSubsUsersReferralCodeOrder = $this->noSaveUpdateByNewReferralCodeOrder($YamatoSubsUsersReferralCodeOrder, $ReferralCodeOrder);
        $em->flush();

        return $YamatoSubsUsersReferralCodeOrder;
    }



    private function createYamatoSubsUsersReferralCodeOrderFrom($Order, $YamatoSubsUsersOrder) {
        $now = new \DateTime();

        $ReferralCodeOrder = $this->referralCodeOrderRepository->findReferralCodeOrderBy($Order);
        if (is_null($ReferralCodeOrder)) {
            return null;
        }

        $YamatoSubsUsersReferralCodeOrder = new YamatoSubsUsersReferralCodeOrder();
        $YamatoSubsUsersReferralCodeOrder
            ->setYamatoSubsUsersOrder($YamatoSubsUsersOrder)
            ->setReferralCodeOrderId($ReferralCodeOrder->getId())
            ->setReferralCodeId($ReferralCodeOrder->getReferralCodeId())
            ->setReferralCode($ReferralCodeOrder->getReferralCode())
            ->setReferralCodeName($ReferralCodeOrder->getReferralCodeName())
            ->setUserId($ReferralCodeOrder->getUserId())
            ->setEmail($ReferralCodeOrder->getEmail())
            ->setOrderId($Order->getId())
            ->setPreOrderId($Order->getPreOrderId())
            ->setOrderDate($Order->getOrderDate())
            ->setDiscount($ReferralCodeOrder->getDiscount())
            ->setVisible($ReferralCodeOrder->isVisible())
            ->setOrderChangeStatus($ReferralCodeOrder->getOrderChangeStatus())
            ->setCreateDate($now)
            ->setUpdateDate($now)
        ;

        return $YamatoSubsUsersReferralCodeOrder;
    }

    private function noSaveUpdateByNewReferralCodeOrder($YamatoSubsUsersReferralCodeOrder, $ReferralCodeOrder) {
        $now = new \DateTime();
        $YamatoSubsUsersReferralCodeOrder
            ->setDiscount($ReferralCodeOrder->getDiscount())
            ->setUpdateDate($now)
        ;

        return $YamatoSubsUsersReferralCodeOrder;
    }
}
