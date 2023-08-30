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
 * ReferralCodeConfig
 *
 * @ORM\Table(name="plg_referral_code_config")
 * @ORM\Entity(repositoryClass="Plugin\ReferralCode\Repository\ReferralCodeConfigRepository")
 */
class ReferralCodeConfig extends AbstractEntity
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
     * @var float
     *
     * @ORM\Column(name="delivery_free_amount", type="decimal", nullable=true, precision=10, scale=0, options={"unsigned":true})
     */
    private $delivery_free_amount;

    /**
     * @var int
     *
     * @ORM\Column(name="subscription_discount_rate", type="integer", options={"unsigned":true})
     */
    private $subscription_discount_rate;

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
     * Set delivery_free_amount.
     *
     * @param float $delivery_free_amount
     *
     * @return $this
     */
    public function setDeliveryFreeAmount($delivery_free_amount)
    {
        $this->delivery_free_amount = $delivery_free_amount;

        return $this;
    }

    /**
     * Get delivery_free_amount.
     *
     * @return float
     */
    public function getDeliveryFreeAmount()
    {
        return $this->delivery_free_amount;
    }

    /**
     * Set subscription_discount_rate.
     *
     * @param int $subscription_discount_rate
     *
     * @return $this
     */
    public function setSubscriptionDiscountRate($subscription_discount_rate)
    {
        $this->subscription_discount_rate = $subscription_discount_rate;

        return $this;
    }

    /**
     * Get subscription_discount_rate.
     *
     * @return int
     */
    public function getSubscriptionDiscountRate()
    {
        return $this->subscription_discount_rate;
    }
}
