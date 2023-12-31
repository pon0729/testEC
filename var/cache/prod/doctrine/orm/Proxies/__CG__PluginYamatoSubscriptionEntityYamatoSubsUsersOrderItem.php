<?php

namespace Proxies\__CG__\Plugin\YamatoSubscription\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class YamatoSubsUsersOrderItem extends \Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrderItem implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'id', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'product_name', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'product_code', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_name1', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_name2', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_category_name1', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_category_name2', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'price', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'quantity', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax_rate', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax_adjust', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax_rule_id', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'currency_code', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'processor_name', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'YamatoSubsUsersOrder', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'YamatoSubsUsersShipping', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'Product', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'ProductClass', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'RoundingType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'TaxType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'TaxDisplayType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'OrderItemType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'point_rate'];
        }

        return ['__isInitialized__', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'id', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'product_name', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'product_code', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_name1', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_name2', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_category_name1', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'class_category_name2', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'price', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'quantity', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax_rate', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax_adjust', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'tax_rule_id', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'currency_code', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'processor_name', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'YamatoSubsUsersOrder', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'YamatoSubsUsersShipping', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'Product', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'ProductClass', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'RoundingType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'TaxType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'TaxDisplayType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'OrderItemType', '' . "\0" . 'Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrderItem' . "\0" . 'point_rate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (YamatoSubsUsersOrderItem $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getPriceIncTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriceIncTax', []);

        return parent::getPriceIncTax();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalPrice', []);

        return parent::getTotalPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemTypeId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemTypeId', []);

        return parent::getOrderItemTypeId();
    }

    /**
     * {@inheritDoc}
     */
    public function isProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isProduct', []);

        return parent::isProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function isDeliveryFee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDeliveryFee', []);

        return parent::isDeliveryFee();
    }

    /**
     * {@inheritDoc}
     */
    public function isCharge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCharge', []);

        return parent::isCharge();
    }

    /**
     * {@inheritDoc}
     */
    public function isDiscount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDiscount', []);

        return parent::isDiscount();
    }

    /**
     * {@inheritDoc}
     */
    public function isTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTax', []);

        return parent::isTax();
    }

    /**
     * {@inheritDoc}
     */
    public function isPoint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPoint', []);

        return parent::isPoint();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductName($productName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductName', [$productName]);

        return parent::setProductName($productName);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductName', []);

        return parent::getProductName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductCode($productCode = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductCode', [$productCode]);

        return parent::setProductCode($productCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductCode', []);

        return parent::getProductCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassName1($className1 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassName1', [$className1]);

        return parent::setClassName1($className1);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassName1', []);

        return parent::getClassName1();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassName2($className2 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassName2', [$className2]);

        return parent::setClassName2($className2);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassName2', []);

        return parent::getClassName2();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassCategoryName1($classCategoryName1 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassCategoryName1', [$classCategoryName1]);

        return parent::setClassCategoryName1($classCategoryName1);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategoryName1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategoryName1', []);

        return parent::getClassCategoryName1();
    }

    /**
     * {@inheritDoc}
     */
    public function setClassCategoryName2($classCategoryName2 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassCategoryName2', [$classCategoryName2]);

        return parent::setClassCategoryName2($classCategoryName2);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassCategoryName2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassCategoryName2', []);

        return parent::getClassCategoryName2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity($quantity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function getTax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTax', []);

        return parent::getTax();
    }

    /**
     * {@inheritDoc}
     */
    public function setTax($tax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTax', [$tax]);

        return parent::setTax($tax);
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxRate($taxRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxRate', [$taxRate]);

        return parent::setTaxRate($taxRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxRate', []);

        return parent::getTaxRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxAdjust($tax_adjust)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxAdjust', [$tax_adjust]);

        return parent::setTaxAdjust($tax_adjust);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxAdjust()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxAdjust', []);

        return parent::getTaxAdjust();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxRuleId($taxRuleId = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxRuleId', [$taxRuleId]);

        return parent::setTaxRuleId($taxRuleId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxRuleId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxRuleId', []);

        return parent::getTaxRuleId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyCode', []);

        return parent::getCurrencyCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyCode($currencyCode = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyCode', [$currencyCode]);

        return parent::setCurrencyCode($currencyCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcessorName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessorName', []);

        return parent::getProcessorName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessorName($processorName = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessorName', [$processorName]);

        return parent::setProcessorName($processorName);
    }

    /**
     * {@inheritDoc}
     */
    public function setYamatoSubsUsersOrder(\Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrder $yamatoSubsUsersOrder = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYamatoSubsUsersOrder', [$yamatoSubsUsersOrder]);

        return parent::setYamatoSubsUsersOrder($yamatoSubsUsersOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getYamatoSubsUsersOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYamatoSubsUsersOrder', []);

        return parent::getYamatoSubsUsersOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setYamatoSubsUsersShipping(\Plugin\YamatoSubscription\Entity\YamatoSubsUsersShipping $yamatoSubsUsersShipping = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYamatoSubsUsersShipping', [$yamatoSubsUsersShipping]);

        return parent::setYamatoSubsUsersShipping($yamatoSubsUsersShipping);
    }

    /**
     * {@inheritDoc}
     */
    public function getYamatoSubsUsersShipping()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYamatoSubsUsersShipping', []);

        return parent::getYamatoSubsUsersShipping();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(\Eccube\Entity\Order $order = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(\Eccube\Entity\Product $product = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', [$product]);

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductClass(\Eccube\Entity\ProductClass $productClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductClass', [$productClass]);

        return parent::setProductClass($productClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductClass', []);

        return parent::getProductClass();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoundingType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoundingType', []);

        return parent::getRoundingType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoundingType(\Eccube\Entity\Master\RoundingType $RoundingType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoundingType', [$RoundingType]);

        return parent::setRoundingType($RoundingType);
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxType(\Eccube\Entity\Master\TaxType $taxType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxType', [$taxType]);

        return parent::setTaxType($taxType);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxType', []);

        return parent::getTaxType();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxDisplayType(\Eccube\Entity\Master\TaxDisplayType $taxDisplayType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxDisplayType', [$taxDisplayType]);

        return parent::setTaxDisplayType($taxDisplayType);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxDisplayType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxDisplayType', []);

        return parent::getTaxDisplayType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderItemType(\Eccube\Entity\Master\OrderItemType $orderItemType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderItemType', [$orderItemType]);

        return parent::setOrderItemType($orderItemType);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderItemType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderItemType', []);

        return parent::getOrderItemType();
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = array (
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
), \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = array (
  0 => '__initializer__',
  1 => '__cloner__',
  2 => '__isInitialized__',
  3 => 'AnnotationReader',
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnotationReader(\Doctrine\Common\Annotations\Reader $Reader)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnotationReader', [$Reader]);

        return parent::setAnnotationReader($Reader);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnotationReader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnotationReader', []);

        return parent::getAnnotationReader();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

    /**
     * {@inheritDoc}
     */
    public function setPointRate($pointRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointRate', [$pointRate]);

        return parent::setPointRate($pointRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointRate', []);

        return parent::getPointRate();
    }

}
