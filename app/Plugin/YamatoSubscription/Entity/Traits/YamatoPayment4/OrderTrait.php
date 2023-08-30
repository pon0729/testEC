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

namespace Plugin\YamatoSubscription\Entity\Traits\YamatoPayment4;

use Doctrine\ORM\Mapping as ORM;

trait OrderTrait
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Plugin\YamatoPayment4\Entity\YamatoOrder", mappedBy="Order", cascade={"persist", "remove"})
     */
    private $YamatoOrder;

    private $yamatoOrderPayment;

    private $yamatoOrderStatus;

    /**
     * @var \DateTime 予約商品出荷予定日
     *
     * @ORM\Column(name="scheduled_shipping_date", type="date", nullable=true)
     */
    private $scheduled_shipping_date;

    /**
     * {@inheritdoc}
     */
    public function setYamatoOrder(\Plugin\YamatoPayment4\Entity\YamatoOrder $YamatoOrder = null)
    {
        $this->YamatoOrder = $YamatoOrder;

        $this->setYamatoOrderPayment($this->YamatoOrder->getMemo03());
        $this->setYamatoOrderStatus($this->YamatoOrder->getMemo04());

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getYamatoOrder()
    {
        return $this->YamatoOrder;
    }

    /**
     * {@inheritdoc}
     */
    public function setYamatoOrderPayment($yamatoOrderPaymentId)
    {
        $this->yamatoOrderPayment = $yamatoOrderPaymentId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getYamatoOrderPayment()
    {
        return $this->yamatoOrderPayment;
    }

    /**
     * {@inheritdoc}
     */
    public function setYamatoOrderStatus($yamatoOrderStatusId)
    {
        $this->yamatoOrderStatus = $yamatoOrderStatusId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getYamatoOrderStatus()
    {
        return $this->yamatoOrderStatus;
    }

    /**
     * {@inheritdoc}
     */
    public function setScheduledShippingDate($scheduled_shipping_date)
    {
        $this->scheduled_shipping_date = $scheduled_shipping_date;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScheduledShippingDate()
    {
        return $this->scheduled_shipping_date;
    }
}
