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

namespace Plugin\ReferralCode\Entity;

use Eccube\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReferralCodeDeliveryConfig
 *
 * @ORM\Table(name="plg_referral_code_delivery_config")
 * @ORM\Entity(repositoryClass="Plugin\ReferralCode\Repository\ReferralCodeDeliveryConfigRepository")
 */
class ReferralCodeDeliveryConfig extends AbstractEntity
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
     * @var boolean
     *
     * @ORM\Column(name="normal_order_flg", type="boolean")
     */
    private $normal_order_flg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="referral_code_order_flg", type="boolean")
     */
    private $referral_code_order_flg;

    /**
     * @var \Eccube\Entity\Delivery
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_id", referencedColumnName="id")
     * })
     */
    private $Delivery;

    /**
     * Set id
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set normal_order_flg.
     *
     * @param bool $normal_order_flg
     *
     * @return $this
     */
    public function setNormalOrderFlg($normal_order_flg)
    {
        $this->normal_order_flg = $normal_order_flg;

        return $this;
    }

    /**
     * Get normal_order_flg.
     *
     * @return bool
     */
    public function isNormalOrderEnable()
    {
        return $this->normal_order_flg;
    }

    /**
     * Set referral_code_order_flg.
     *
     * @param bool $referral_code_order_flg
     *
     * @return $this
     */
    public function setReferralCodeOrderFlg($referral_code_order_flg)
    {
        $this->referral_code_order_flg = $referral_code_order_flg;

        return $this;
    }

    /**
     * Get referral_code_order_flg.
     *
     * @return bool
     */
    public function isReferralCodeOrderEnable()
    {
        return $this->referral_code_order_flg;
    }

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
        return $this->Delivery;
    }

    /**
     * @param  $Delivery
     *
     * @return $this
     */
    public function setDelivery($Delivery)
    {
        $this->Delivery = $Delivery;

        return $this;
    }
}
