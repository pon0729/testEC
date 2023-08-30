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

/**
 * YamatoSubsUsersReferralCodeOrder
 *
 * @ORM\Table(name="plg_yamato_subs_users_referral_code_order")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsUsersReferralCodeOrderRepository")
 */
class YamatoSubsUsersReferralCodeOrder extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="referral_code_order_id", type="integer", options={"unsigned":true})
     */
    private $referral_code_order_id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="referral_code_id", type="integer", nullable=true, options={"unsigned":true})
     */
    private $referral_code_id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referral_code", type="string", nullable=true)
     */
    private $referral_code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referral_code_name", type="string", nullable=true)
     */
    private $referral_code_name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true, options={"unsigned":true})
     */
    private $user_id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", nullable=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", options={"unsigned":true})
     */
    private $order_id;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_order_id", type="string")
     */
    private $pre_order_id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="order_date", type="datetimetz", nullable=true)
     */
    private $order_date;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="decimal", precision=10, scale=0, options={"unsigned":true,"default":0})
     */
    private $discount = 0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", options={"default":true})
     */
    private $visible;

    /**
     * @var boolean
     *
     * @ORM\Column(name="order_change_status", type="boolean", options={"default":false})
     */
    private $order_change_status;

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
     * @var YamatoSubsUsersOrder
     *
     * @ORM\OneToOne(targetEntity="YamatoSubsUsersOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="yamato_subs_users_order_id", referencedColumnName="id")
     * })
     */
    private $YamatoSubsUsersOrder;

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
     * Set referral_code_order_id.
     *
     * @param int $referral_code_order_id
     *
     * @return $this
     */
    public function setReferralCodeOrderId($referral_code_order_id)
    {
        $this->referral_code_order_id = $referral_code_order_id;

        return $this;
    }

    /**
     * Get referral_code_order_id.
     *
     * @return int
     */
    public function getReferralCodeOrderId()
    {
        return $this->referral_code_order_id;
    }

    /**
     * Set referral_code_id.
     *
     * @param int $referral_code_id
     *
     * @return $this
     */
    public function setReferralCodeId($referral_code_id)
    {
        $this->referral_code_id = $referral_code_id;

        return $this;
    }

    /**
     * Get referral_code_id.
     *
     * @return int
     */
    public function getReferralCodeId()
    {
        return $this->referral_code_id;
    }

    /**
     * Set referral_code.
     *
     * @param string $referral_code
     *
     * @return $this
     */
    public function setReferralCode($referral_code)
    {
        $this->referral_code = $referral_code;

        return $this;
    }

    /**
     * Get referral_code.
     *
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referral_code;
    }

    /**
     * @param string $referral_code_name
     *
     * @return $this
     */
    public function setReferralCodeName($referral_code_name)
    {
        $this->referral_code_name = $referral_code_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferralCodeName()
    {
        return $this->referral_code_name;
    }

    /**
     * Set user_id.
     *
     * @param int $user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get user_id.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set order_id.
     *
     * @param int $order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Get order_id.
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set pre_order_id.
     *
     * @param string $pre_order_id
     *
     * @return $this
     */
    public function setPreOrderId($pre_order_id)
    {
        $this->pre_order_id = $pre_order_id;

        return $this;
    }

    /**
     * Get pre_order_id.
     *
     * @return string
     */
    public function getPreOrderId()
    {
        return $this->pre_order_id;
    }

    /**
     * Set order_date.
     *
     * @param \DateTime|null $orderDate
     *
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->order_date = $orderDate;

        return $this;
    }

    /**
     * Get order_date.
     *
     * @return \DateTime|null
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * Set discount.
     *
     * @param float $discount
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
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * is visible.
     *
     * @return bool
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @return bool
     */
    public function getOrderChangeStatus()
    {
        return $this->order_change_status;
    }

    /**
     * @param bool $order_change_status
     *
     * @return $this
     */
    public function setOrderChangeStatus($order_change_status)
    {
        $this->order_change_status = $order_change_status;

        return $this;
    }

    /**
     * Set create_date.
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
     * Get create_date.
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set update_date.
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
     * Get update_date.
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
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
}
