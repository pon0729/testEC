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

use Doctrine\Common\Collections\ArrayCollection;
use Eccube\Entity\Shipping;
use Eccube\Repository\AbstractRepository;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersShipping;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsUsersShippingRepository.
 */
class YamatoSubsUsersShippingRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, YamatoSubsUsersShipping::class);
    }

    public function findShippingsBy($YamatoSubsUsersOrder) {
        return new ArrayCollection($this->findBy(['YamatoSubsUsersOrder' => $YamatoSubsUsersOrder]));
    }

    public function register($Order, $YamatoSubsUsersOrder) {
        $YamatoSubsUsersShippings = new ArrayCollection();
        $em = $this->getEntityManager();
        foreach($Order->getShippings() as $Shipping) {
            $YamatoSubsUsersShipping = $this->createYamatoSubsUsersShippingFrom($Shipping, $YamatoSubsUsersOrder);
            $em->persist($YamatoSubsUsersShipping);
            $YamatoSubsUsersShippings->add($YamatoSubsUsersShipping);
        }
        $em->flush();

        return $YamatoSubsUsersShippings;
    }

    public function registerShippingsFrom($Order, $YamatoSubsUsersShippings) {
        $Shippings = new ArrayCollection();
        $em = $this->getEntityManager();
        foreach($YamatoSubsUsersShippings as $YamatoSubsUsersShipping) {
            $Shipping = $this->createShippingFrom($Order, $YamatoSubsUsersShipping);
            $em->persist($Shipping);
            $Shippings->add($Shipping);
        }
        $em->flush();

        return $Shippings;
    }



    private function createYamatoSubsUsersShippingFrom($Shipping, $YamatoSubsUsersOrder) {
        $now = new \DateTime();
        $YamatoSubsUsersShipping = new YamatoSubsUsersShipping();
        $YamatoSubsUsersShipping
            ->setYamatoSubsUsersOrder($YamatoSubsUsersOrder)
            ->setCountry($Shipping->getCountry())
            ->setPref($Shipping->getPref())
            ->setDelivery($Shipping->getDelivery())
            //->setCreator($Shipping->getCreator()) // 本体のSaveEventSubscriber#prePersist でセットされる
            ->setName01($Shipping->getName01())
            ->setName02($Shipping->getName02())
            ->setKana01($Shipping->getKana01())
            ->setKana02($Shipping->getKana02())
            ->setCompanyName($Shipping->getCompanyName())
            ->setPhoneNumber($Shipping->getPhoneNumber())
            ->setPostalCode($Shipping->getPostalCode())
            ->setAddr01($Shipping->getAddr01())
            ->setAddr02($Shipping->getAddr02())
            ->setShippingDeliveryName($Shipping->getShippingDeliveryName())
            ->setTimeId($Shipping->getTimeId())
            ->setShippingDeliveryTime($Shipping->getShippingDeliveryTime())
            //->setShippingDeliveryDate($Shipping->getShippingDeliveryDate()) // 次回の定期配送で不要な項目なのでコメントアウト
            //->setShippingDate($Shipping->getShippingDate()) // 次回の定期配送で不要な項目なのでコメントアウト
            //->setTrackingNumber($Shipping->getTrackingNumber()) // 次回の定期配送で不要な項目なのでコメントアウト
            ->setNote($Shipping->getNote())
            ->setSortNo($Shipping->getSortNo())
            ->setCreateDate($now)
            ->setUpdateDate($now)
            //->setMailSendDate($Shipping->getMailSendDate()) // 次回の定期配送で不要な項目なのでコメントアウト
        ;
        return $YamatoSubsUsersShipping;
    }

    private function createShippingFrom($Order, $YamatoSubsUsersShipping) {
        $now = new \DateTime();
        $Shipping = new Shipping();
        $Shipping
            ->setOrder($Order)
            ->setCountry($YamatoSubsUsersShipping->getCountry())
            ->setPref($YamatoSubsUsersShipping->getPref())
            ->setDelivery($YamatoSubsUsersShipping->getDelivery())
            //->setCreator($YamatoSubsUsersShipping->getCreator()) // 本体のSaveEventSubscriber#prePersist でセットされる
            ->setName01($YamatoSubsUsersShipping->getName01())
            ->setName02($YamatoSubsUsersShipping->getName02())
            ->setKana01($YamatoSubsUsersShipping->getKana01())
            ->setKana02($YamatoSubsUsersShipping->getKana02())
            ->setCompanyName($YamatoSubsUsersShipping->getCompanyName())
            ->setPhoneNumber($YamatoSubsUsersShipping->getPhoneNumber())
            ->setPostalCode($YamatoSubsUsersShipping->getPostalCode())
            ->setAddr01($YamatoSubsUsersShipping->getAddr01())
            ->setAddr02($YamatoSubsUsersShipping->getAddr02())
            ->setShippingDeliveryName($YamatoSubsUsersShipping->getShippingDeliveryName())
            ->setTimeId($YamatoSubsUsersShipping->getTimeId())
            ->setShippingDeliveryTime($YamatoSubsUsersShipping->getShippingDeliveryTime())
            ->setShippingDeliveryDate(null)
            ->setShippingDate(null)
            ->setTrackingNumber(null)
            ->setNote($YamatoSubsUsersShipping->getNote())
            ->setSortNo($YamatoSubsUsersShipping->getSortNo())
            ->setCreateDate($now)
            ->setUpdateDate($now)
            ->setMailSendDate(null)
        ;
        return $Shipping;
    }
}
