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
use Eccube\Entity\OrderItem;
use Eccube\Repository\AbstractRepository;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrderItem;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Eccube\Entity\Master\OrderItemType;
use Eccube\Entity\Master\TaxType;

/**
 * Class YamatoSubsUsersOrderItemRepository.
 */
class YamatoSubsUsersOrderItemRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, YamatoSubsUsersOrderItem::class);
    }

    public function findOrderItemsBy($YamatoSubsUsersOrder) {
        return new ArrayCollection($this->findBy(['YamatoSubsUsersOrder' => $YamatoSubsUsersOrder]));
    }

    public function register($Order, $YamatoSubsUsersOrder, $YamatoSubsUsersShippings) {
        $YamatoSubsUsersOrderItems = new ArrayCollection();
        $em = $this->getEntityManager();
        foreach($Order->getOrderItems() as $OrderItem) {
            $YamatoSubsUsersShipping = null;
            if ($OrderItem->isProduct() || $OrderItem->isDeliveryFee()) {
                if (count($YamatoSubsUsersShippings) === 1) {
                    $YamatoSubsUsersShipping = $YamatoSubsUsersShippings[0];
                } else {
                    $shipping_index = $Order->getShippings()->indexOf($OrderItem->getShipping());
                    $YamatoSubsUsersShipping = ($shipping_index === false) ? null : $YamatoSubsUsersShippings[$shipping_index];
                }
            }
            $YamatoSubsUsersOrderItem = $this->createYamatoSubsUsersOrderItemFrom($OrderItem, $YamatoSubsUsersOrder, $YamatoSubsUsersShipping);
            $em->persist($YamatoSubsUsersOrderItem);
            $YamatoSubsUsersOrderItems->add($YamatoSubsUsersOrderItem);
        }
        $em->flush();

        return $YamatoSubsUsersOrderItems;
    }

    public function registerOrderItemsFrom($Order, $Shippings, $YamatoSubsUsersShippings, $YamatoSubsUsersOrderItems, $discount_twelve=null) {
        $OrderItems = new ArrayCollection();
        $em = $this->getEntityManager();
        foreach($YamatoSubsUsersOrderItems as $YamatoSubsUsersOrderItem) {
            $Shipping = null;
            if ($YamatoSubsUsersOrderItem->isProduct() || $YamatoSubsUsersOrderItem->isDeliveryFee()) {
                if (count($Shippings) === 1) {
                    $Shipping = $Shippings[0];
                } else {
                    $yamato_subs_users_shipping_index = $YamatoSubsUsersShippings->indexOf($YamatoSubsUsersOrderItem->getYamatoSubsUsersShipping());
                    $Shipping = ($yamato_subs_users_shipping_index === false) ? null : $Shippings[$yamato_subs_users_shipping_index];
                }
            }
            $OrderItem = $this->createOrderItemFrom($Order, $Shipping, $YamatoSubsUsersOrderItem);
            $em->persist($OrderItem);
            $OrderItems->add($OrderItem);
        }
        //配送回数12倍数時_継続割引
        if(!empty($discount_twelve) and $discount_twelve > 0){
            $OrderItem = new OrderItem();
            $DiscountType = $em->find(OrderItemType::class, OrderItemType::DISCOUNT);
            $Taxation = $em->find(TaxType::class, TaxType::NON_TAXABLE);
            $OrderItem
                ->setProductName(trans('yamatosubscription.admin.discount.product_name'))
                ->setQuantity(1)
                ->setPrice(-$discount_twelve)
                ->setOrderItemType($DiscountType)
                ->setOrder($Order)
                ->setTaxType($Taxation);
            $em->persist($OrderItem);
            $OrderItems->add($OrderItem);            
        }

        $em->flush();

        return $OrderItems;
    }

    public function updateByNewOrderItems(
        $YamatoSubsUsersOrder,
        $YamatoSubsUsersOrderItems,
        $YamatoSubsUsersShippings,
        $OrderItems,
        $Shippings
    ) {
        $em = $this->getEntityManager();
        // 一度全て削除
        foreach($YamatoSubsUsersOrderItems as $YamatoSubsUsersOrderItem) {
            $em->remove($YamatoSubsUsersOrderItem);
        }
        $em->flush();

        // 再度新規登録して保存(delete -> insert)
        $NewYamatoSubsUsersOrderItems = new ArrayCollection();
        foreach($OrderItems as $OrderItem) {
            $YamatoSubsUsersShipping = null;
            if ($OrderItem->isProduct() || $OrderItem->isDeliveryFee()) {
                if (count($Shippings) === 1) {
                    $YamatoSubsUsersShipping = $YamatoSubsUsersShippings[0];
                } else {
                    $shipping_index = $Shippings->indexOf($OrderItem->getShipping());
                    $YamatoSubsUsersShipping = ($shipping_index === false) ? null : $YamatoSubsUsersShippings[$shipping_index];
                }
            }
            $YamatoSubsUsersOrderItem = $this->createYamatoSubsUsersOrderItemFrom($OrderItem, $YamatoSubsUsersOrder, $YamatoSubsUsersShipping);
            $em->persist($YamatoSubsUsersOrderItem);
            $NewYamatoSubsUsersOrderItems->add($YamatoSubsUsersOrderItem);
        }
        $em->flush();

        return $NewYamatoSubsUsersOrderItems;
    }



    private function createYamatoSubsUsersOrderItemFrom($OrderItem, $YamatoSubsUsersOrder, $YamatoSubsUsersShipping) {
        $YamatoSubsUsersOrderItem = new YamatoSubsUsersOrderItem();
        $YamatoSubsUsersOrderItem
            ->setYamatoSubsUsersOrder($YamatoSubsUsersOrder)
            ->setYamatoSubsUsersShipping($YamatoSubsUsersShipping ? $YamatoSubsUsersShipping : null)
            ->setProduct($OrderItem->getProduct())
            ->setProductClass($OrderItem->getProductClass())
            ->setRoundingType($OrderItem->getRoundingType())
            ->setTaxType($OrderItem->getTaxType())
            ->setTaxDisplayType($OrderItem->getTaxDisplayType())
            ->setOrderItemType($OrderItem->getOrderItemType())
            ->setProductName($OrderItem->getProductName())
            ->setProductCode($OrderItem->getProductCode())
            ->setClassName1($OrderItem->getClassName1())
            ->setClassName2($OrderItem->getClassName2())
            ->setClassCategoryName1($OrderItem->getClassCategoryName1())
            ->setClassCategoryName2($OrderItem->getClassCategoryName2())
            ->setPrice($OrderItem->getPrice())
            ->setQuantity($OrderItem->getQuantity())
            ->setTax($OrderItem->getTax())
            ->setTaxRate($OrderItem->getTaxRate())
            ->setTaxAdjust($OrderItem->getTaxAdjust())
            ->setTaxRuleId($OrderItem->getTaxRuleId())
            ->setCurrencyCode($OrderItem->getCurrencyCode())
            ->setProcessorName($OrderItem->getProcessorName())
            ->setPointRate($OrderItem->getPointRate())
        ;
        return $YamatoSubsUsersOrderItem;
    }

    private function createOrderItemFrom($Order, $Shipping, $YamatoSubsUsersOrderItem) {
        $OrderItem = new OrderItem();
        $OrderItem
            ->setOrder($Order)
            ->setProduct($YamatoSubsUsersOrderItem->getProduct())
            ->setProductClass($YamatoSubsUsersOrderItem->getProductClass())
            ->setShipping($Shipping)
            ->setRoundingType($YamatoSubsUsersOrderItem->getRoundingType())
            ->setTaxType($YamatoSubsUsersOrderItem->getTaxType())
            ->setTaxDisplayType($YamatoSubsUsersOrderItem->getTaxDisplayType())
            ->setOrderItemType($YamatoSubsUsersOrderItem->getOrderItemType())
            ->setProductName($YamatoSubsUsersOrderItem->getProductName())
            ->setProductCode($YamatoSubsUsersOrderItem->getProductCode())
            ->setClassName1($YamatoSubsUsersOrderItem->getClassName1())
            ->setClassName2($YamatoSubsUsersOrderItem->getClassName2())
            ->setClassCategoryName1($YamatoSubsUsersOrderItem->getClassCategoryName1())
            ->setClassCategoryName2($YamatoSubsUsersOrderItem->getClassCategoryName2())
            ->setPrice($YamatoSubsUsersOrderItem->getPrice())
            ->setQuantity($YamatoSubsUsersOrderItem->getQuantity())
            ->setTax($YamatoSubsUsersOrderItem->getTax())
            ->setTaxRate($YamatoSubsUsersOrderItem->getTaxRate())
            ->setTaxAdjust($YamatoSubsUsersOrderItem->getTaxAdjust())
            ->setTaxRuleId($YamatoSubsUsersOrderItem->getTaxRuleId())
            ->setCurrencyCode($YamatoSubsUsersOrderItem->getCurrencyCode())
            ->setProcessorName($YamatoSubsUsersOrderItem->getProcessorName())
            ->setPointRate($YamatoSubsUsersOrderItem->getPointRate())
        ;
        return $OrderItem;
    }
}
