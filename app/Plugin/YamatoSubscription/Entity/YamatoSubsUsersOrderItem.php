<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\YamatoSubscription\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;
use Eccube\Entity\ItemInterface;
use Eccube\Entity\Master\OrderItemType;
use Eccube\Entity\Master\RoundingType;
use Eccube\Entity\Master\TaxDisplayType;
use Plugin\YamatoSubscription\Entity\Traits\PointRateTrait;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrder;

/**
 * YamatoSubsUsersOrderItem
 *
 * @ORM\Table(name="plg_yamato_subs_users_order_item")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderItemRepository")
 */
class YamatoSubsUsersOrderItem extends AbstractEntity implements ItemInterface
{
    use PointRateTrait;

    /**
     * Get price IncTax
     *
     * @return string
     */
    public function getPriceIncTax()
    {
        // 税表示区分が税込の場合は, priceに税込金額が入っている.
        if ($this->TaxDisplayType && $this->TaxDisplayType->getId() == TaxDisplayType::INCLUDED) {
            return $this->price;
        }

        return $this->price + $this->tax;
    }

    /**
     * @return integer
     */
    public function getTotalPrice()
    {
        return $this->getPriceIncTax() * $this->getQuantity();
    }

    /**
     * @return integer
     */
    public function getOrderItemTypeId()
    {
        if (is_object($this->getOrderItemType())) {
            return $this->getOrderItemType()->getId();
        }

        return null;
    }

    /**
     * 商品明細かどうか.
     *
     * @return boolean 商品明細の場合 true
     */
    public function isProduct()
    {
        return $this->getOrderItemTypeId() === OrderItemType::PRODUCT;
    }

    /**
     * 送料明細かどうか.
     *
     * @return boolean 送料明細の場合 true
     */
    public function isDeliveryFee()
    {
        return $this->getOrderItemTypeId() === OrderItemType::DELIVERY_FEE;
    }

    /**
     * 手数料明細かどうか.
     *
     * @return boolean 手数料明細の場合 true
     */
    public function isCharge()
    {
        return $this->getOrderItemTypeId() === OrderItemType::CHARGE;
    }

    /**
     * 値引き明細かどうか.
     *
     * @return boolean 値引き明細の場合 true
     */
    public function isDiscount()
    {
        return $this->getOrderItemTypeId() === OrderItemType::DISCOUNT;
    }

    /**
     * 税額明細かどうか.
     *
     * @return boolean 税額明細の場合 true
     */
    public function isTax()
    {
        return $this->getOrderItemTypeId() === OrderItemType::TAX;
    }

    /**
     * ポイント明細かどうか.
     *
     * @return boolean ポイント明細の場合 true
     */
    public function isPoint()
    {
        return $this->getOrderItemTypeId() === OrderItemType::POINT;
    }



    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255)
     */
    private $product_name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_code", type="string", length=255, nullable=true)
     */
    private $product_code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_name1", type="string", length=255, nullable=true)
     */
    private $class_name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_name2", type="string", length=255, nullable=true)
     */
    private $class_name2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_category_name1", type="string", length=255, nullable=true)
     */
    private $class_category_name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_category_name2", type="string", length=255, nullable=true)
     */
    private $class_category_name2;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=12, scale=2, options={"default":0})
     */
    private $price = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=0, options={"default":0})
     */
    private $quantity = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="decimal", precision=10, scale=0, options={"default":0})
     */
    private $tax = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=10, scale=0, options={"unsigned":true,"default":0})
     */
    private $tax_rate = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_adjust", type="decimal", precision=10, scale=0, options={"unsigned":true,"default":0})
     */
    private $tax_adjust = 0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tax_rule_id", type="smallint", nullable=true, options={"unsigned":true})
     */
    private $tax_rule_id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_code", type="string", nullable=true)
     */
    private $currency_code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="processor_name", type="string", nullable=true)
     */
    private $processor_name;

    /**
     * @var YamatoSubsUsersOrder
     *
     * @ORM\ManyToOne(targetEntity="YamatoSubsUsersOrder", inversedBy="YamatoSubsUsersOrderItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="yamato_subs_users_order_id", referencedColumnName="id")
     * })
     */
    private $YamatoSubsUsersOrder;

    /**
     * @var YamatoSubsUsersShipping
     *
     * @ORM\ManyToOne(targetEntity="YamatoSubsUsersShipping", inversedBy="YamatoSubsUsersOrderItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="yamato_subs_users_shipping_id", referencedColumnName="id")
     * })
     */
    private $YamatoSubsUsersShipping;

    /**
     * @var \Eccube\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $Product;

    /**
     * @var \Eccube\Entity\ProductClass
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\ProductClass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_class_id", referencedColumnName="id")
     * })
     */
    private $ProductClass;

    /**
     * @var \Eccube\Entity\Master\RoundingType
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\RoundingType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rounding_type_id", referencedColumnName="id")
     * })
     */
    private $RoundingType;

    /**
     * @var \Eccube\Entity\Master\TaxType
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\TaxType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_type_id", referencedColumnName="id")
     * })
     */
    private $TaxType;

    /**
     * @var \Eccube\Entity\Master\TaxDisplayType
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\TaxDisplayType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_display_type_id", referencedColumnName="id")
     * })
     */
    private $TaxDisplayType;

    /**
     * @var \Eccube\Entity\Master\OrderItemType
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\OrderItemType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_item_type_id", referencedColumnName="id")
     * })
     */
    private $OrderItemType;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productName.
     *
     * @param string $productName
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->product_name = $productName;

        return $this;
    }

    /**
     * Get productName.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * Set productCode.
     *
     * @param string|null $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode = null)
    {
        $this->product_code = $productCode;

        return $this;
    }

    /**
     * Get productCode.
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->product_code;
    }

    /**
     * Set className1.
     *
     * @param string|null $className1
     *
     * @return $this
     */
    public function setClassName1($className1 = null)
    {
        $this->class_name1 = $className1;

        return $this;
    }

    /**
     * Get className1.
     *
     * @return string|null
     */
    public function getClassName1()
    {
        return $this->class_name1;
    }

    /**
     * Set className2.
     *
     * @param string|null $className2
     *
     * @return $this
     */
    public function setClassName2($className2 = null)
    {
        $this->class_name2 = $className2;

        return $this;
    }

    /**
     * Get className2.
     *
     * @return string|null
     */
    public function getClassName2()
    {
        return $this->class_name2;
    }

    /**
     * Set classCategoryName1.
     *
     * @param string|null $classCategoryName1
     *
     * @return $this
     */
    public function setClassCategoryName1($classCategoryName1 = null)
    {
        $this->class_category_name1 = $classCategoryName1;

        return $this;
    }

    /**
     * Get classCategoryName1.
     *
     * @return string|null
     */
    public function getClassCategoryName1()
    {
        return $this->class_category_name1;
    }

    /**
     * Set classCategoryName2.
     *
     * @param string|null $classCategoryName2
     *
     * @return $this
     */
    public function setClassCategoryName2($classCategoryName2 = null)
    {
        $this->class_category_name2 = $classCategoryName2;

        return $this;
    }

    /**
     * Get classCategoryName2.
     *
     * @return string|null
     */
    public function getClassCategoryName2()
    {
        return $this->class_category_name2;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param string $tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Set taxRate.
     *
     * @param string $taxRate
     *
     * @return $this
     */
    public function setTaxRate($taxRate)
    {
        $this->tax_rate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate.
     *
     * @return string
     */
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * Set taxAdjust.
     *
     * @param string $tax_adjust
     *
     * @return $this
     */
    public function setTaxAdjust($tax_adjust)
    {
        $this->tax_adjust = $tax_adjust;

        return $this;
    }

    /**
     * Get taxAdjust.
     *
     * @return string
     */
    public function getTaxAdjust()
    {
        return $this->tax_adjust;
    }

    /**
     * Set taxRuleId.
     * @deprecated 税率設定は受注作成時に決定するため廃止予定
     *
     * @param int|null $taxRuleId
     *
     * @return $this
     */
    public function setTaxRuleId($taxRuleId = null)
    {
        $this->tax_rule_id = $taxRuleId;

        return $this;
    }

    /**
     * Get taxRuleId.
     * @deprecated 税率設定は受注作成時に決定するため廃止予定
     *
     * @return int|null
     */
    public function getTaxRuleId()
    {
        return $this->tax_rule_id;
    }

    /**
     * Get currencyCode.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Set currencyCode.
     *
     * @param string|null $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode = null)
    {
        $this->currency_code = $currencyCode;

        return $this;
    }

    /**
     * Get processorName.
     *
     * @return string
     */
    public function getProcessorName()
    {
        return $this->processor_name;
    }

    /**
     * Set processorName.
     *
     * @param string|null $processorName
     *
     * @return $this
     */
    public function setProcessorName($processorName = null)
    {
        $this->processor_name = $processorName;

        return $this;
    }

    /**
     * Set YamatoSubsUsersOrder.
     *
     * @param YamatoSubsUsersOrder|null $yamatoSubsUsersOrder
     *
     * @return $this
     */
    public function setYamatoSubsUsersOrder(YamatoSubsUsersOrder $yamatoSubsUsersOrder = null)
    {
        $this->YamatoSubsUsersOrder = $yamatoSubsUsersOrder;

        return $this;
    }

    /**
     * Get YamatoSubsUsersOrder.
     *
     * @return YamatoSubsUsersOrder|null
     */
    public function getYamatoSubsUsersOrder()
    {
        return $this->YamatoSubsUsersOrder;
    }

    /**
     * Set YamatoSubsUsersShipping.
     *
     * @param YamatoSubsUsersShipping|null $yamatoSubsUsersShipping
     *
     * @return $this
     */
    public function setYamatoSubsUsersShipping(YamatoSubsUsersShipping $yamatoSubsUsersShipping = null)
    {
        $this->YamatoSubsUsersShipping = $yamatoSubsUsersShipping;

        return $this;
    }

    /**
     * Get YamatoSubsUsersShipping.
     *
     * @return YamatoSubsUsersShipping|null
     */
    public function getYamatoSubsUsersShipping()
    {
        return $this->YamatoSubsUsersShipping;
    }

    /**
     * Set order.
     *
     * @param \Eccube\Entity\Order|null $order
     *
     * @return $this
     */
    public function setOrder(\Eccube\Entity\Order $order = null)
    {
        $this->Order = $order;

        return $this;
    }

    /**
     * Set product.
     *
     * @param \Eccube\Entity\Product|null $product
     *
     * @return $this
     */
    public function setProduct(\Eccube\Entity\Product $product = null)
    {
        $this->Product = $product;

        return $this;
    }

    /**
     * Get product.
     *
     * @return \Eccube\Entity\Product|null
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set productClass.
     *
     * @param \Eccube\Entity\ProductClass|null $productClass
     *
     * @return $this
     */
    public function setProductClass(\Eccube\Entity\ProductClass $productClass = null)
    {
        $this->ProductClass = $productClass;

        return $this;
    }

    /**
     * Get productClass.
     *
     * @return \Eccube\Entity\ProductClass|null
     */
    public function getProductClass()
    {
        return $this->ProductClass;
    }

    /**
     * @return RoundingType
     */
    public function getRoundingType()
    {
        return $this->RoundingType;
    }

    /**
     * @param RoundingType $RoundingType
     */
    public function setRoundingType(RoundingType $RoundingType = null)
    {
        $this->RoundingType = $RoundingType;

        return $this;
    }

    /**
     * Set taxType
     *
     * @param \Eccube\Entity\Master\TaxType $taxType
     *
     * @return $this
     */
    public function setTaxType(\Eccube\Entity\Master\TaxType $taxType = null)
    {
        $this->TaxType = $taxType;

        return $this;
    }

    /**
     * Get taxType
     *
     * @return \Eccube\Entity\Master\TaxType
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }

    /**
     * Set taxDisplayType
     *
     * @param \Eccube\Entity\Master\TaxDisplayType $taxDisplayType
     *
     * @return $this
     */
    public function setTaxDisplayType(\Eccube\Entity\Master\TaxDisplayType $taxDisplayType = null)
    {
        $this->TaxDisplayType = $taxDisplayType;

        return $this;
    }

    /**
     * Get taxDisplayType
     *
     * @return \Eccube\Entity\Master\TaxDisplayType
     */
    public function getTaxDisplayType()
    {
        return $this->TaxDisplayType;
    }

    /**
     * Set orderItemType
     *
     * @param \Eccube\Entity\Master\OrderItemType $orderItemType
     *
     * @return $this
     */
    public function setOrderItemType(\Eccube\Entity\Master\OrderItemType $orderItemType = null)
    {
        $this->OrderItemType = $orderItemType;

        return $this;
    }

    /**
     * Get orderItemType
     *
     * @return \Eccube\Entity\Master\OrderItemType
     */
    public function getOrderItemType()
    {
        return $this->OrderItemType;
    }
}
