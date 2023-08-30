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
use Doctrine\ORM\EntityNotFoundException;
use Eccube\Entity\AbstractEntity;

/**
 * YamatoSubsHistory
 *
 * @ORM\Table(name="plg_yamato_subs_history")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsHistoryRepository")
 */
class YamatoSubsHistory extends AbstractEntity
{
    /** 全ての受注. */
    const ALL = 'all';
    /** 継続中の定期購入. */
    const ACTIVE = 'active';
    /** 未発送の受注. */
    const LATEST = 'latest';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var YamatoSubs
     *
     * @ORM\ManyToOne(targetEntity="Plugin\YamatoSubscription\Entity\YamatoSubs", inversedBy="YamatoSubsHistories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subs_id", referencedColumnName="id")
     * })
     */
    private $YamatoSubs;

    /**
     * @var Order
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Order", inversedBy="YamatoSubsHistories", cascade={"persist"})
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $Order;

    /**
     * @var int
     *
     * @ORM\Column(name="subs_month_period", type="integer", options={"unsigned":true})
     */
    private $subs_month_period;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery_count", type="integer", options={"unsigned":true})
     */
    private $delivery_count;

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
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", options={"default":true})
     */
    private $visible;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return YamatoSubs
     */
    public function getYamatoSubs()
    {
        return $this->YamatoSubs;
    }

    /**
     * @param YamatoSubs $YamatoSubs
     *
     * @return $this
     */
    public function setYamatoSubs($YamatoSubs)
    {
        $this->YamatoSubs = $YamatoSubs;

        return $this;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param Order $Order
     *
     * @return $this
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;

        return $this;
    }

    /**
     * @return int
     */
    public function getSubsMonthPeriod()
    {
        return $this->subs_month_period;
    }

    /**
     * @param int $subs_month_period
     *
     * @return $this
     */
    public function setSubsMonthPeriod($subs_month_period)
    {
        $this->subs_month_period = $subs_month_period;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryCount()
    {
        return $this->delivery_count;
    }

    /**
     * @param int $delivery_count
     *
     * @return $this
     */
    public function setDeliveryCount($delivery_count)
    {
        $this->delivery_count = $delivery_count;
        return $this;
    }
        
    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param \DateTime $create_date
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * @param \DateTime $update_date
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->update_date = $update_date;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }
}
