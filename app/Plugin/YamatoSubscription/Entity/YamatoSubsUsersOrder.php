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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Entity\ItemInterface;
use Eccube\Entity\PurchaseInterface;
use Eccube\Service\Calculator\OrderItemCollection;
use Eccube\Service\PurchaseFlow\ItemCollection;
use Plugin\YamatoSubscription\Entity\Traits\PointTrait;
use Plugin\YamatoSubscription\Entity\Traits\YamatoPayment4\OrderTrait;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrderItem;
use Plugin\YamatoSubscription\Entity\YamatoSubsUsersShipping;

/**
 * YamatoSubsUsersOrder
 *
 * @ORM\Table(name="plg_yamato_subs_users_order")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderRepository")
 */
class YamatoSubsUsersOrder extends AbstractEntity implements PurchaseInterface, ItemHolderInterface
{
    use PointTrait, OrderTrait;

    /**
     * 課税対象の明細を返す.
     *
     * @return array
     */
    public function getTaxableItems()
    {
        $Items = [];

        foreach ($this->YamatoSubsUsersOrderItems as $Item) {
            if ($Item->getTaxType()->getId() == \Eccube\Entity\Master\TaxType::TAXATION) {
                $Items[] = $Item;
            }
        }

        return $Items;
    }

    /**
     * 課税対象の明細の合計金額を返す.
     * 商品合計 + 送料 + 手数料 + 値引き(課税).
     */
    public function getTaxableTotal()
    {
        $total = 0;

        foreach ($this->getTaxableItems() as $Item) {
            $total += $Item->getTotalPrice();
        }

        return $total;
    }

    /**
     * 課税対象の明細の合計金額を、税率ごとに集計する.
     *
     * @return array
     */
    public function getTaxableTotalByTaxRate()
    {
        $total = [];

        foreach ($this->getTaxableItems() as $Item) {
                $totalPrice = $Item->getTotalPrice();
                $taxRate = $Item->getTaxRate();
                $total[$taxRate] = isset($total[$taxRate])
                    ? $total[$taxRate] + $totalPrice
                    : $totalPrice;
        }

        krsort($total);

        return $total;
    }

    /**
     * 課税対象の値引き明細を返す.
     *
     * @return array
     */
    public function getTaxableDiscountItems()
    {
        return array_filter($this->getTaxableItems(), function(YamatoSubsUsersOrderItem $Item) {
            return $Item->isDiscount();
        });
    }

    /**
     * 課税対象の値引き金額合計を返す.
     *
     * @return mixed
     */
    public function getTaxableDiscount()
    {
        return array_reduce($this->getTaxableDiscountItems(), function ($sum, YamatoSubsUsersOrderItem $Item) {
            return $sum += $Item->getTotalPrice();
        }, 0);
    }

    /**
     * 非課税・不課税の値引き明細を返す.
     *
     * @return array
     */
    public function getTaxFreeDiscountItems()
    {
        return array_filter($this->YamatoSubsUsersOrderItems->toArray(), function(YamatoSubsUsersOrderItem $Item) {
            return $Item->isPoint() || ($Item->isDiscount() && $Item->getTaxType()->getId() != \Eccube\Entity\Master\TaxType::TAXATION);
        });
    }

    /**
     * 複数配送かどうかの判定を行う.
     *
     * @return boolean
     */
    public function isMultiple()
    {
        $YamatoSubsUsersShippings = [];
        // クエリビルダ使用時に絞り込まれる場合があるため,
        // getShippingsではなくOrderItem経由でShippingを取得する.
        foreach ($this->getYamatoSubsUsersOrderItems() as $YamatoSubsUsersOrderItem) {
            if ($YamatoSubsUsersShipping = $YamatoSubsUsersOrderItem->getYamatoSubsUsersShipping()) {
                $id = $YamatoSubsUsersShipping->getId();
                if (isset($YamatoSubsUsersShippings[$id])) {
                    continue;
                }
                $YamatoSubsUsersShippings[$id] = $YamatoSubsUsersShipping;
            }
        }

        return count($YamatoSubsUsersShippings) > 1 ? true : false;
    }

    /**
     * 対象となるお届け先情報を取得
     *
     * @param integer $yamato_subs_users_shipping_id
     *
     * @return YamatoSubsUsersShipping|null
     */
    public function findYamatoSubsUsersShipping($yamato_subs_users_shipping_id)
    {
        foreach ($this->getYamatoSubsUsersShippings() as $YamatoSubsUsersShipping) {
            if ($YamatoSubsUsersShipping->getId() == $yamato_subs_users_shipping_id) {
                return $YamatoSubsUsersShipping;
            }
        }

        return null;
    }

    /**
     * この注文の保持する販売種別を取得します.
     *
     * @return \Eccube\Entity\Master\SaleType[] 一意な販売種別の配列
     */
    public function getSaleTypes()
    {
        $saleTypes = [];
        foreach ($this->getYamatoSubsUsersOrderItems() as $YamatoSubsUsersOrderItem) {
            /* @var $ProductClass \Eccube\Entity\ProductClass */
            $ProductClass = $YamatoSubsUsersOrderItem->getProductClass();
            if ($ProductClass) {
                $saleTypes[] = $ProductClass->getSaleType();
            }
        }

        return array_unique($saleTypes);
    }

    /**
     * 同じ規格の商品の個数をまとめた受注明細を取得
     *
     * @return OrderItem[]
     */
    public function getMergedProductOrderItems()
    {
        $ProductOrderItems = $this->getProductOrderItems();
        $yamatoSubsUsersOrderItemArray = [];
        /** @var OrderItem $ProductOrderItem */
        foreach ($ProductOrderItems as $ProductOrderItem) {
            $productClassId = $ProductOrderItem->getProductClass()->getId();
            if (array_key_exists($productClassId, $yamatoSubsUsersOrderItemArray)) {
                // 同じ規格の商品がある場合は個数をまとめる
                /** @var ItemInterface $OrderItem */
                $YamatoSubsUsersOrderItem = $yamatoSubsUsersOrderItemArray[$productClassId];
                $quantity = $YamatoSubsUsersOrderItem->getQuantity() + $ProductOrderItem->getQuantity();
                $YamatoSubsUsersOrderItem->setQuantity($quantity);
            } else {
                // 新規規格の商品は新しく追加する
                $YamatoSubsUsersOrderItem = new YamatoSubsUsersOrderItem();
                $YamatoSubsUsersOrderItem->copyProperties($ProductOrderItem, ['id']);
                $yamatoSubsUsersOrderItemArray[$productClassId] = $YamatoSubsUsersOrderItem;
            }
        }

        return array_values($yamatoSubsUsersOrderItemArray);
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
     * @var string|null
     *
     * @ORM\Column(name="pre_order_id", type="string", length=255, nullable=true)
     */
    private $pre_order_id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_no", type="string", length=255, nullable=true)
     */
    private $order_no;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", length=4000, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name01", type="string", length=255)
     */
    private $name01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name02", type="string", length=255)
     */
    private $name02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kana01", type="string", length=255, nullable=true)
     */
    private $kana01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kana02", type="string", length=255, nullable=true)
     */
    private $kana02;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $company_name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=14, nullable=true)
     */
    private $phone_number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postal_code", type="string", length=8, nullable=true)
     */
    private $postal_code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addr01", type="string", length=255, nullable=true)
     */
    private $addr01;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addr02", type="string", length=255, nullable=true)
     */
    private $addr02;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth", type="datetimetz", nullable=true)
     */
    private $birth;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotal", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     */
    private $subtotal = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     */
    private $discount = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_fee_total", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     */
    private $delivery_fee_total = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="charge", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     */
    private $charge = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     *
     * @deprecated 明細ごとに集計した税額と差異が発生する場合があるため非推奨
     */
    private $tax = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     */
    private $total = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_total", type="decimal", precision=12, scale=2, options={"unsigned":true,"default":0})
     */
    private $payment_total = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_method", type="string", length=255, nullable=true)
     */
    private $payment_method;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=4000, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetimetz")
     */
    private $create_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetimetz")
     */
    private $update_date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="order_date", type="datetimetz", nullable=true)
     */
    private $order_date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="payment_date", type="datetimetz", nullable=true)
     */
    private $payment_date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_code", type="string", nullable=true)
     */
    private $currency_code;

    /**
     * 注文完了画面に表示するメッセージ
     *
     * @var string|null
     *
     * @ORM\Column(name="complete_message", type="text", nullable=true)
     */
    private $complete_message;

    /**
     * 注文完了メールに表示するメッセージ
     *
     * @var string|null
     *
     * @ORM\Column(name="complete_mail_message", type="text", nullable=true)
     */
    private $complete_mail_message;



    /**
     * @var \Doctrine\Common\Collections\Collection|YamatoSubsUsersOrderItem[]
     *
     * @ORM\OneToMany(targetEntity="Plugin\YamatoSubscription\Entity\YamatoSubsUsersOrderItem", mappedBy="YamatoSubsUsersOrder", cascade={"persist","remove"})
     */
    private $YamatoSubsUsersOrderItems;

    /**
     * @var \Doctrine\Common\Collections\Collection|YamatoSubsUsersShipping[]
     *
     * @ORM\OneToMany(targetEntity="Plugin\YamatoSubscription\Entity\YamatoSubsUsersShipping", mappedBy="YamatoSubsUsersOrder", cascade={"persist","remove"})
     */
    private $YamatoSubsUsersShippings;

    /**
     * @var YamatoSubs
     *
     * @ORM\OneToOne(targetEntity="Plugin\YamatoSubscription\Entity\YamatoSubs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subs_id", referencedColumnName="id")
     * })
     */
    private $YamatoSubs;

    /**
     * @var Order
     *
     * @ORM\OneToOne(targetEntity="Eccube\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $Order;

    /**
     * @var \Eccube\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Customer", inversedBy="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $Customer;

    /**
     * @var \Eccube\Entity\Master\Country
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $Country;

    /**
     * @var \Eccube\Entity\Master\Pref
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\Pref")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pref_id", referencedColumnName="id")
     * })
     */
    private $Pref;

    /**
     * @var \Eccube\Entity\Master\Sex
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\Sex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sex_id", referencedColumnName="id")
     * })
     */
    private $Sex;

    /**
     * @var \Eccube\Entity\Master\Job
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="job_id", referencedColumnName="id")
     * })
     */
    private $Job;

    /**
     * @var \Eccube\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $Payment;

    /**
     * @var \Eccube\Entity\Master\DeviceType
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\DeviceType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="device_type_id", referencedColumnName="id")
     * })
     */
    private $DeviceType;

    /**
     * OrderStatusより先にプロパティを定義しておかないとセットされなくなる
     *
     * @var \Eccube\Entity\Master\CustomerOrderStatus
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\CustomerOrderStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_status_id", referencedColumnName="id")
     * })
     */
    private $CustomerOrderStatus;

    /**
     * OrderStatusより先にプロパティを定義しておかないとセットされなくなる
     *
     * @var \Eccube\Entity\Master\OrderStatusColor
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\OrderStatusColor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_status_id", referencedColumnName="id")
     * })
     */
    private $OrderStatusColor;

    /**
     * @var \Eccube\Entity\Master\OrderStatus
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Master\OrderStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_status_id", referencedColumnName="id")
     * })
     */
    private $OrderStatus;



    /**
     * Constructor
     */
    public function __construct(\Eccube\Entity\Master\OrderStatus $orderStatus = null)
    {
        $this->setDiscount(0)
        ->setSubTotal(0)
        ->setTotal(0)
        ->setPaymentTotal(0)
        ->setCharge(0)
        ->setTax(0)
        ->setDeliveryFeeTotal(0)
        ->setOrderStatus($orderStatus)
        ;

        $this->YamatoSubsUsersOrderItems = new ArrayCollection();
        $this->YamatoSubsUsersShippings = new ArrayCollection();
    }

    /**
     * Clone
     */
    public function __clone()
    {
        $OriginYamatoSubsUsersOrderItems = $this->YamatoSubsUsersOrderItems;
        $YamatoSubsUsersOrderItems = new ArrayCollection();
        foreach ($this->YamatoSubsUsersOrderItems as $YamatoSubsUsersOrderItem) {
            $YamatoSubsUsersOrderItems->add(clone $YamatoSubsUsersOrderItem);
        }
        $this->YamatoSubsUsersOrderItems = $YamatoSubsUsersOrderItems;

//            // ShippingとOrderItemが循環参照するため, 手動でヒモ付を変更する.
//            $YamatoSubsUsersShippings = new ArrayCollection();
//            foreach ($this->YamatoSubsUsersShippings as $YamatoSubsUsersShipping) {
//                $CloneYamatoSubsUsersShipping = clone $YamatoSubsUsersShipping;
//                foreach ($OriginYamatoSubsUsersOrderItems as $OriginYamatoSubsUsersOrderItem) {
//                    //$CloneYamatoSubsUsersShipping->removeYamatoSubsUsersOrderItem($OriginYamatoSubsUsersOrderItem);
//                }
//                foreach ($this->YamatoSubsUsersOrderItems as $YamatoSubsUsersOrderItem) {
//                    if ($YamatoSubsUsersOrderItem->getYamatoSubsUsersShipping() && $YamatoSubsUsersOrderItem->getYamatoSubsUsersShipping()->getId() == $YamatoSubsUsersShipping->getId()) {
//                        $YamatoSubsUsersOrderItem->setYamatoSubsUsersShipping($CloneYamatoSubsUsersShipping);
//                    }
//                    $CloneYamatoSubsUsersShipping->addYamatoSubsUsersOrderItem($YamatoSubsUsersOrderItem);
//                }
//                $YamatoSubsUsersShippings->add($CloneYamatoSubsUsersShipping);
//            }
//            $this-YamatoSubsUsersShippings = $YamatoSubsUsersShippings;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set preOrderId.
     *
     * @param string|null $preOrderId
     *
     * @return $this
     */
    public function setPreOrderId($preOrderId = null)
    {
        $this->pre_order_id = $preOrderId;

        return $this;
    }

    /**
     * Get preOrderId.
     *
     * @return string|null
     */
    public function getPreOrderId()
    {
        return $this->pre_order_id;
    }

    /**
     * Set orderNo
     *
     * @param string|null $orderNo
     *
     * @return $this
     */
    public function setOrderNo($orderNo = null)
    {
        $this->order_no = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * Set message.
     *
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set name01.
     *
     * @param string|null $name01
     *
     * @return $this
     */
    public function setName01($name01 = null)
    {
        $this->name01 = $name01;

        return $this;
    }

    /**
     * Get name01.
     *
     * @return string|null
     */
    public function getName01()
    {
        return $this->name01;
    }

    /**
     * Set name02.
     *
     * @param string|null $name02
     *
     * @return $this
     */
    public function setName02($name02 = null)
    {
        $this->name02 = $name02;

        return $this;
    }

    /**
     * Get name02.
     *
     * @return string|null
     */
    public function getName02()
    {
        return $this->name02;
    }

    /**
     * Set kana01.
     *
     * @param string|null $kana01
     *
     * @return $this
     */
    public function setKana01($kana01 = null)
    {
        $this->kana01 = $kana01;

        return $this;
    }

    /**
     * Get kana01.
     *
     * @return string|null
     */
    public function getKana01()
    {
        return $this->kana01;
    }

    /**
     * Set kana02.
     *
     * @param string|null $kana02
     *
     * @return $this
     */
    public function setKana02($kana02 = null)
    {
        $this->kana02 = $kana02;

        return $this;
    }

    /**
     * Get kana02.
     *
     * @return string|null
     */
    public function getKana02()
    {
        return $this->kana02;
    }

    /**
     * Set companyName.
     *
     * @param string|null $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName = null)
    {
        $this->company_name = $companyName;

        return $this;
    }

    /**
     * Get companyName.
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone_number.
     *
     * @param string|null $phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number = null)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * Get phone_number.
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set postal_code.
     *
     * @param string|null $postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code = null)
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * Get postal_code.
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set addr01.
     *
     * @param string|null $addr01
     *
     * @return $this
     */
    public function setAddr01($addr01 = null)
    {
        $this->addr01 = $addr01;

        return $this;
    }

    /**
     * Get addr01.
     *
     * @return string|null
     */
    public function getAddr01()
    {
        return $this->addr01;
    }

    /**
     * Set addr02.
     *
     * @param string|null $addr02
     *
     * @return $this
     */
    public function setAddr02($addr02 = null)
    {
        $this->addr02 = $addr02;

        return $this;
    }

    /**
     * Get addr02.
     *
     * @return string|null
     */
    public function getAddr02()
    {
        return $this->addr02;
    }

    /**
     * Set birth.
     *
     * @param \DateTime|null $birth
     *
     * @return $this
     */
    public function setBirth($birth = null)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth.
     *
     * @return \DateTime|null
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set subtotal.
     *
     * @param string $subtotal
     *
     * @return $this
     */
    public function setSubTotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal.
     *
     * @return string
     */
    public function getSubTotal()
    {
        return $this->subtotal;
    }

    /**
     * Set discount.
     *
     * @param string $discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount.
     *
     * @deprecated 4.0.3 から値引きは課税値引きと 非課税・不課税の値引きの2種に分かれる. 課税値引きについてはgetTaxableDiscountを利用してください.
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set deliveryFeeTotal.
     *
     * @param string $deliveryFeeTotal
     *
     * @return $this
     */
    public function setDeliveryFeeTotal($deliveryFeeTotal)
    {
        $this->delivery_fee_total = $deliveryFeeTotal;

        return $this;
    }

    /**
     * Get deliveryFeeTotal.
     *
     * @return string
     */
    public function getDeliveryFeeTotal()
    {
        return $this->delivery_fee_total;
    }

    /**
     * Set charge.
     *
     * @param string $charge
     *
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge.
     *
     * @return string
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set tax.
     *
     * @param string $tax
     *
     * @return $this
     *
     * @deprecated 明細ごとに集計した税額と差異が発生する場合があるため非推奨
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax.
     *
     * @return string
     *
     * @deprecated 明細ごとに集計した税額と差異が発生する場合があるため非推奨
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set total.
     *
     * @param string $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total.
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set paymentTotal.
     *
     * @param string $paymentTotal
     *
     * @return $this
     */
    public function setPaymentTotal($paymentTotal)
    {
        $this->payment_total = $paymentTotal;

        return $this;
    }

    /**
     * Get paymentTotal.
     *
     * @return string
     */
    public function getPaymentTotal()
    {
        return $this->payment_total;
    }

    /**
     * Set paymentMethod.
     *
     * @param string|null $paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        $this->payment_method = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod.
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Set note.
     *
     * @param string|null $note
     *
     * @return $this
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set createDate.
     *
     * @param \DateTime $createDate
     *
     * @return $this
     */
    public function setCreateDate($createDate)
    {
        $this->create_date = $createDate;

        return $this;
    }

    /**
     * Get createDate.
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set updateDate.
     *
     * @param \DateTime $updateDate
     *
     * @return $this
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;

        return $this;
    }

    /**
     * Get updateDate.
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Set orderDate.
     *
     * @param \DateTime|null $orderDate
     *
     * @return $this
     */
    public function setOrderDate($orderDate = null)
    {
        $this->order_date = $orderDate;

        return $this;
    }

    /**
     * Get orderDate.
     *
     * @return \DateTime|null
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * Set paymentDate.
     *
     * @param \DateTime|null $paymentDate
     *
     * @return $this
     */
    public function setPaymentDate($paymentDate = null)
    {
        $this->payment_date = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate.
     *
     * @return \DateTime|null
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
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
     * @return null|string
     */
    public function getCompleteMessage()
    {
        return $this->complete_message;
    }

    /**
     * @param null|string $complete_message
     *
     * @return $this
     */
    public function setCompleteMessage($complete_message = null)
    {
        $this->complete_message = $complete_message;

        return $this;
    }

    /**
     * @param null|string $complete_message
     *
     * @return $this
     */
    public function appendCompleteMessage($complete_message = null)
    {
        $this->complete_message .= $complete_message;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCompleteMailMessage()
    {
        return $this->complete_mail_message;
    }

    /**
     * @param null|string $complete_mail_message
     *
     * @return
     */
    public function setCompleteMailMessage($complete_mail_message = null)
    {
        $this->complete_mail_message = $complete_mail_message;

        return $this;
    }

    /**
     * @param null|string $complete_mail_message
     *
     * @return
     */
    public function appendCompleteMailMessage($complete_mail_message = null)
    {
        $this->complete_mail_message .= $complete_mail_message;

        return $this;
    }

    /**
     * 商品の受注明細を取得
     *
     * @return OrderItem[]
     */
    public function getProductOrderItems()
    {
        $sio = new OrderItemCollection($this->YamatoSubsUsersOrderItems->toArray());

        return array_values($sio->getProductClasses()->toArray());
    }
    
    /**
     * Add yamatoSubsUsersOrderItem.
     *
     * @param YamatoSubsUsersOrderItem $yamatoSubsUsersOrderItem
     *
     * @return $this
     */
    public function addYamatoSubsUsersOrderItem(YamatoSubsUsersOrderItem $yamatoSubsUsersOrderItem)
    {
        $this->YamatoSubsUsersOrderItems[] = $yamatoSubsUsersOrderItem;

        return $this;
    }

    /**
     * Remove yamatoSubsUsersOrderItem.
     *
     * @param YamatoSubsUsersOrderItem $yamatoSubsUsersOrderItem
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeYamatoSubsUsersOrderItem(YamatoSubsUsersOrderItem $yamatoSubsUsersOrderItem)
    {
        return $this->YamatoSubsUsersOrderItems->removeElement($yamatoSubsUsersOrderItem);
    }

    /**
     * Set yamatoSubsUsersOrderItems.
     *
     * @param YamatoSubsUsersOrderItems|null $yamatoSubsUsersOrderItems
     *
     * @return $this
     */
    public function setYamatoSubsUsersOrderItems($yamatoSubsUsersOrderItems)
    {
        if (is_array($yamatoSubsUsersOrderItems)) {
            $this->YamatoSubsUsersOrderItems = new ArrayCollection($yamatoSubsUsersOrderItems);
        } else {
            $this->YamatoSubsUsersOrderItems = $yamatoSubsUsersOrderItems;
        }

        return $this;
    }

    /**
     * Get orderItems.
     *
     * @return \Doctrine\Common\Collections\Collection|YamatoSubsUsersOrderItem[]
     */
    public function getYamatoSubsUsersOrderItems()
    {
        return $this->YamatoSubsUsersOrderItems;
    }

    /**
     * Sorted to getYamatoSubsUsersOrderItems()
     *
     * @return ItemCollection
     */
    public function getYamatoSubsUsersSortedOrderItems()
    {
        return (new ItemCollection($this->getYamatoSubsUsersOrderItems()))->sort();
    }

    /**
     * Sorted to getYamatoSubsUsersOrderItems()
     *
     * @return ItemCollection
     */
    public function getItems()
    {
        return $this->getYamatoSubsUsersSortedOrderItems();
    }

    /**
     * Add yamatoSubsUsersShipping.
     *
     * @param YamatoSubsUsersShipping $yamatoSubsUsersShipping
     *
     * @return $this
     */
    public function addYamatoSubsUsersShipping(YamatoSubsUsersShipping $yamatoSubsUsersShipping)
    {
        $this->YamatoSubsUsersShippings[] = $yamatoSubsUsersShipping;

        return $this;
    }

    /**
     * Remove yamatoSubsUsersShipping.
     *
     * @param YamatoSubsUsersShipping $yamatoSubsUsersShipping
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeYamatoSubsUsersShipping(YamatoSubsUsersShipping $yamatoSubsUsersShipping)
    {
        return $this->YamatoSubsUsersShippings->removeElement($yamatoSubsUsersShipping);
    }

    /**
     * Set yamatoSubsUsersShipping.
     *
     * @param YamatoSubsUsersShippings|null $yamatoSubsUsersShippings
     *
     * @return $this
     */
    public function setYamatoSubsUsersShippings($yamatoSubsUsersShippings)
    {
        if (is_array($yamatoSubsUsersShippings)) {
            $this->YamatoSubsUsersShippings = new ArrayCollection($yamatoSubsUsersShippings);
        } else {
            $this->YamatoSubsUsersShippings = $yamatoSubsUsersShippings;
        }

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection|YamatoSubsUsersShipping[]
     */
    public function getYamatoSubsUsersShippings()
    {
        $criteria = Criteria::create()
            ->orderBy(['name01' => Criteria::ASC, 'name02' => Criteria::ASC, 'id' => Criteria::ASC]);

        return $this->YamatoSubsUsersShippings->matching($criteria);
    }

    /**
     * @param YamatoSubs $yamatoSubs
     *
     * @return
     */
    public function setYamatoSubs($yamatoSubs)
    {
        $this->YamatoSubs = $yamatoSubs;

        return $this;
    }

    /**
     * @return YamatoSubs
     */
    public function getYamatoSubs()
    {
        return $this->YamatoSubs;
    }

    /**
     * Set order.
     *
     * @param \Eccube\Entity\Order|null $customer
     *
     * @return $this
     */
    public function setOrder(\Eccube\Entity\Order $order = null)
    {
        $this->Order = $order;

        return $this;
    }

    /**
     * Get order.
     *
     * @return \Eccube\Entity\Order|null
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * Set customer.
     *
     * @param \Eccube\Entity\Customer|null $customer
     *
     * @return $this
     */
    public function setCustomer(\Eccube\Entity\Customer $customer = null)
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * Get customer.
     *
     * @return \Eccube\Entity\Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * Set country.
     *
     * @param \Eccube\Entity\Master\Country|null $country
     *
     * @return $this
     */
    public function setCountry(\Eccube\Entity\Master\Country $country = null)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return \Eccube\Entity\Master\Country|null
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set pref.
     *
     * @param \Eccube\Entity\Master\Pref|null $pref
     *
     * @return $this
     */
    public function setPref(\Eccube\Entity\Master\Pref $pref = null)
    {
        $this->Pref = $pref;

        return $this;
    }

    /**
     * Get pref.
     *
     * @return \Eccube\Entity\Master\Pref|null
     */
    public function getPref()
    {
        return $this->Pref;
    }

    /**
     * Set sex.
     *
     * @param \Eccube\Entity\Master\Sex|null $sex
     *
     * @return $this
     */
    public function setSex(\Eccube\Entity\Master\Sex $sex = null)
    {
        $this->Sex = $sex;

        return $this;
    }

    /**
     * Get sex.
     *
     * @return \Eccube\Entity\Master\Sex|null
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Set job.
     *
     * @param \Eccube\Entity\Master\Job|null $job
     *
     * @return $this
     */
    public function setJob(\Eccube\Entity\Master\Job $job = null)
    {
        $this->Job = $job;

        return $this;
    }

    /**
     * Get job.
     *
     * @return \Eccube\Entity\Master\Job|null
     */
    public function getJob()
    {
        return $this->Job;
    }

    /**
     * Set payment.
     *
     * @param \Eccube\Entity\Payment|null $payment
     *
     * @return $this
     */
    public function setPayment(\Eccube\Entity\Payment $payment = null)
    {
        $this->Payment = $payment;

        return $this;
    }

    /**
     * Get payment.
     *
     * @return \Eccube\Entity\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * Set deviceType.
     *
     * @param \Eccube\Entity\Master\DeviceType|null $deviceType
     *
     * @return $this
     */
    public function setDeviceType(\Eccube\Entity\Master\DeviceType $deviceType = null)
    {
        $this->DeviceType = $deviceType;

        return $this;
    }

    /**
     * Get deviceType.
     *
     * @return \Eccube\Entity\Master\DeviceType|null
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * Set customerOrderStatus.
     *
     * @param \Eccube\Entity\Master\CustomerOrderStatus|null $customerOrderStatus
     *
     * @return $this
     */
    public function setCustomerOrderStatus(\Eccube\Entity\Master\CustomerOrderStatus $customerOrderStatus = null)
    {
        $this->CustomerOrderStatus = $customerOrderStatus;

        return $this;
    }

    /**
     * Get customerOrderStatus.
     *
     * @return \Eccube\Entity\Master\CustomerOrderStatus|null
     */
    public function getCustomerOrderStatus()
    {
        return $this->CustomerOrderStatus;
    }

    /**
     * Set orderStatusColor.
     *
     * @param \Eccube\Entity\Master\OrderStatusColor|null $orderStatusColor
     *
     * @return $this
     */
    public function setOrderStatusColor(\Eccube\Entity\Master\OrderStatusColor $orderStatusColor = null)
    {
        $this->OrderStatusColor = $orderStatusColor;

        return $this;
    }

    /**
     * Get orderStatusColor.
     *
     * @return \Eccube\Entity\Master\OrderStatusColor|null
     */
    public function getOrderStatusColor()
    {
        return $this->OrderStatusColor;
    }

    /**
     * Set orderStatus.
     *
     * @param \Eccube\Entity\Master\OrderStatus|null|object $orderStatus
     *
     * @return $this
     */
    public function setOrderStatus(\Eccube\Entity\Master\OrderStatus $orderStatus = null)
    {
        $this->OrderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus.
     *
     * @return \Eccube\Entity\Master\OrderStatus|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item)
    {
        $this->YamatoSubsUsersOrderItems->add($item);
    }

    public function getQuantity()
    {
        $quantity = 0;
        foreach ($this->getItems() as $item) {
            $quantity += $item->getQuantity();
        }

        return $quantity;
    }
}
