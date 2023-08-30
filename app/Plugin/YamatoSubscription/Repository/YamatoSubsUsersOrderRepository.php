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

use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\Order;
use Eccube\Repository\AbstractRepository;
use Eccube\Service\OrderHelper;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrder;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsUsersOrderRepository.
 */
class YamatoSubsUsersOrderRepository extends AbstractRepository
{
    /**
     * @var OrderHelper
     */
    protected $orderHelper;

    /**
     * @var OrderNoProcessor
     */
    protected $orderNoProcessor;

    /**
     * @var OrderStatusRepository
     */
    protected $orderStatusRepository;

    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry,
        OrderHelper $orderHelper,
        OrderNoProcessor $orderNoProcessor,
        OrderStatusRepository $orderStatusRepository
    ) {
        parent::__construct($registry, YamatoSubsUsersOrder::class);
        $this->orderHelper = $orderHelper;
        $this->orderNoProcessor = $orderNoProcessor;
        $this->orderStatusRepository = $orderStatusRepository;
    }

    public function findOrderBy($YamatoSubs) {
        return $this->findOneBy(['YamatoSubs' => $YamatoSubs]);
    }

    public function register($Order, $YamatoSubs) {
        $em = $this->getEntityManager();
        $YamatoSubsUsersOrder = $this->createYamatoSubsUsersOrderFrom($Order, $YamatoSubs);
        $em->persist($YamatoSubsUsersOrder);
        $em->flush();

        return $YamatoSubsUsersOrder;
    }

    public function registerOrderFrom($YamatoSubsUsersOrder, $discount_repeat=0) {
        $em = $this->getEntityManager();
        $YamatoSubsUsersOrderClone = clone $YamatoSubsUsersOrder;
        if(!empty($discount_repeat)){
            $YamatoSubsUsersOrderClone->setDiscount($YamatoSubsUsersOrder->getDiscount() + $discount_repeat);
            $YamatoSubsUsersOrderClone->setTotal($YamatoSubsUsersOrder->getTotal() - $discount_repeat);
            $YamatoSubsUsersOrderClone->setPaymentTotal($YamatoSubsUsersOrder->getPaymentTotal() - $discount_repeat);
        }
        $Order = $this->createOrderFrom($YamatoSubsUsersOrderClone);
        $em->persist($Order);
        $em->flush();

        $purchaseContext = new PurchaseContext(clone $Order, $Order->getCustomer());
        $Order->setOrderNo(null);
        $this->orderNoProcessor->process($Order, $purchaseContext);
        $em->flush();

        return $Order;
    }

    public function updateByNewOrder($YamatoSubsUsersOrder, $Order) {
        $now = new \DateTime();
        $em = $this->getEntityManager();
        $YamatoSubsUsersOrder = $this->noSaveUpdateByNewOrder($YamatoSubsUsersOrder, $Order);
        $em->flush();

        return $YamatoSubsUsersOrder;
    }


 
    private function createYamatoSubsUsersOrderFrom($Order, $YamatoSubs) {
        $now = new \DateTime();
        $YamatoSubsUsersOrder = new YamatoSubsUsersOrder();
        $YamatoSubsUsersOrder
            ->setYamatoSubs($YamatoSubs)
            ->setOrder($Order)
            ->setCustomer($Order->getCustomer())
            ->setCountry($Order->getCountry())
            ->setPref($Order->getPref())
            ->setSex($Order->getSex())
            ->setJob($Order->getJob())
            ->setPayment($Order->getPayment())
            ->setDeviceType($Order->getDeviceType())
            ->setPreOrderId($Order->getPreOrderId())
            ->setOrderNo($Order->getOrderNo())
            ->setMessage($Order->getMessage())
            ->setName01($Order->getName01())
            ->setName02($Order->getName02())
            ->setKana01($Order->getKana01())
            ->setKana02($Order->getKana02())
            ->setCompanyName($Order->getCompanyName())
            ->setEmail($Order->getEmail())
            ->setPhoneNumber($Order->getPhoneNumber())
            ->setPostalCode($Order->getPostalCode())
            ->setAddr01($Order->getAddr01())
            ->setAddr02($Order->getAddr02())
            ->setBirth($Order->getBirth())
            ->setSubtotal($Order->getSubtotal())
            ->setDiscount($Order->getDiscount())
            ->setDeliveryFeeTotal($Order->getDeliveryFeeTotal())
            ->setCharge($Order->getCharge())
            ->setTax($Order->getTax())
            ->setTotal($Order->getTotal())
            ->setPaymentTotal($Order->getPaymentTotal())
            ->setPaymentMethod($Order->getPaymentMethod())
            ->setNote($Order->getNote())
            ->setCreateDate($now)
            ->setUpdateDate($now)
            ->setOrderDate($Order->getOrderDate())
            ->setPaymentDate($Order->getPaymentDate())
            ->setCurrencyCode($Order->getCurrencyCode())
            ->setCompleteMessage($Order->getCompleteMessage())
            ->setCompleteMailMessage($Order->getCompleteMailMessage())
            ->setAddPoint($Order->getAddPoint())
            ->setUsePoint($Order->getUsePoint())
            ->setOrderStatus($Order->getOrderStatus())
        ;

        return $YamatoSubsUsersOrder;
    }

    private function createOrderFrom($YamatoSubsUsersOrder) {
        $now = new \DateTime();
        $Order = new Order();
        $Order
            ->setCustomer($YamatoSubsUsersOrder->getCustomer())
            ->setCountry($YamatoSubsUsersOrder->getCountry())
            ->setPref($YamatoSubsUsersOrder->getPref())
            ->setSex($YamatoSubsUsersOrder->getSex())
            ->setJob($YamatoSubsUsersOrder->getJob())
            ->setPayment($YamatoSubsUsersOrder->getPayment())
            ->setDeviceType($YamatoSubsUsersOrder->getDeviceType())
            ->setPreOrderId($this->orderHelper->createPreOrderId())
            ->setOrderNo($YamatoSubsUsersOrder->getOrderNo())
            ->setMessage($YamatoSubsUsersOrder->getMessage())
            ->setName01($YamatoSubsUsersOrder->getName01())
            ->setName02($YamatoSubsUsersOrder->getName02())
            ->setKana01($YamatoSubsUsersOrder->getKana01())
            ->setKana02($YamatoSubsUsersOrder->getKana02())
            ->setCompanyName($YamatoSubsUsersOrder->getCompanyName())
            ->setEmail($YamatoSubsUsersOrder->getEmail())
            ->setPhoneNumber($YamatoSubsUsersOrder->getPhoneNumber())
            ->setPostalCode($YamatoSubsUsersOrder->getPostalCode())
            ->setAddr01($YamatoSubsUsersOrder->getAddr01())
            ->setAddr02($YamatoSubsUsersOrder->getAddr02())
            ->setBirth($YamatoSubsUsersOrder->getBirth())
            ->setSubtotal($YamatoSubsUsersOrder->getSubtotal())
            ->setDiscount($YamatoSubsUsersOrder->getDiscount())
            ->setDeliveryFeeTotal($YamatoSubsUsersOrder->getDeliveryFeeTotal())
            ->setCharge($YamatoSubsUsersOrder->getCharge())
            ->setTax($YamatoSubsUsersOrder->getTax())
            ->setTotal($YamatoSubsUsersOrder->getTotal())
            ->setPaymentTotal($YamatoSubsUsersOrder->getPaymentTotal())
            ->setPaymentMethod($YamatoSubsUsersOrder->getPaymentMethod())
            ->setNote($YamatoSubsUsersOrder->getNote())
            ->setCreateDate($now)
            ->setUpdateDate($now)
            ->setOrderDate($now)
            ->setPaymentDate(null)
            ->setCurrencyCode($YamatoSubsUsersOrder->getCurrencyCode())
            ->setCompleteMessage($YamatoSubsUsersOrder->getCompleteMessage())
            ->setCompleteMailMessage($YamatoSubsUsersOrder->getCompleteMailMessage())
            ->setAddPoint($YamatoSubsUsersOrder->getAddPoint())
            ->setUsePoint($YamatoSubsUsersOrder->getUsePoint())
            ->setOrderStatus($this->orderStatusRepository->find(OrderStatus::NEW))
        ;

        return $Order;
    }

    private function noSaveUpdateByNewOrder($YamatoSubsUsersOrder, $Order) {
        $now = new \DateTime();
        $YamatoSubsUsersOrder
            ->setSubtotal($Order->getSubtotal())
            ->setDiscount($Order->getDiscount())
            ->setDeliveryFeeTotal($Order->getDeliveryFeeTotal())
            ->setCharge($Order->getCharge())
            ->setTax($Order->getTax())
            ->setTotal($Order->getTotal())
            ->setPaymentTotal($Order->getPaymentTotal())
            ->setAddPoint($Order->getAddPoint())
            ->setUsePoint($Order->getUsePoint())
            ->setUpdateDate($now)
        ;
        return $YamatoSubsUsersOrder;
    }
}
