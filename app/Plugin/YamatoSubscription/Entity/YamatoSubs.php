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
use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\AbstractEntity;

/**
 * YamatoSubs
 *
 * @ORM\Table(name="plg_yamato_subs")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsRepository")
 */
class YamatoSubs extends AbstractEntity
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
     * @var int
     *
     * @ORM\Column(name="last_subs_history_id", type="integer", options={"unsigned":true})
     */
    private $last_subs_history_id;

    /**
     * @var int
     *
     * @ORM\Column(name="subs_month_period", type="integer", options={"unsigned":true})
     */
    private $subs_month_period;

    /**
     * @var int
     *
     * @ORM\Column(name="credit_count", type="integer", options={"unsigned":true})
     */
    private $credit_count;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery_count", type="integer", options={"unsigned":true})
     */
    private $delivery_count;

    /**
     * @var string
     *
     * @ORM\Column(name="credit_card_key", type="string")
     */
    private $credit_card_key;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cancelled_date", type="datetimetz", nullable=true)
     */
    private $cancelled_date;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Plugin\YamatoSubscription\Entity\YamatoSubsHistory", mappedBy="YamatoSubs", cascade={"persist","remove"})
     */
    private $YamatoSubsHistories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->YamatoSubsHistories = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getLastSubsHistoryId()
    {
        return $this->last_subs_history_id;
    }

    /**
     * @param int $last_subs_history_id
     *
     * @return $this
     */
    public function setLastSubsHistoryId($last_subs_history_id)
    {
        $this->last_subs_history_id = $last_subs_history_id;

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
    public function getCreditCount()
    {
        return $this->credit_count;
    }

    /**
     * @param int $credit_count
     *
     * @return $this
     */
    public function setCreditCount($credit_count)
    {
        $this->credit_count = $credit_count;

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
     * @return string
     */
    public function getCreditCardKey()
    {
        return $this->credit_card_key;
    }

    /**
     * @param string $credit_card_key
     *
     * @return $this
     */
    public function setCreditCardKey($credit_card_key)
    {
        $this->credit_card_key = $credit_card_key;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        return $this->cancelled_date;
    }

    /**
     * @param \DateTime $cancelled_date
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->cancelled_date = $cancelled_date;

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

    /**
     * Get YamatoSubsHistories.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getYamatoSubsHistories()
    {
        return $this->YamatoSubsHistories;
    }

    /**
     * @param ArrayCollection $YamatoSubsHistories
     * @return $this
     */
    public function setYamatoSubsHistories($YamatoSubsHistories)
    {
        $this->YamatoSubsHistories = $YamatoSubsHistories;

        return $this;
    }

    /**
     * Add YamatoSubsHistory.
     *
     * @param YamatoSubsHistory $YamatoSubsHistory
     *
     * @return $this
     */
    public function addYamatoSubsHistory(YamatoSubsHistory $YamatoSubsHistory)
    {
        $this->YamatoSubsHistories[] = $YamatoSubsHistory;

        return $this;
    }

    /**
     * Remove YamatoSubsHistory.
     *
     * @param YamatoSubsHistory $YamatoSubsHistory
     */
    public function removeYamatoSubsHistory(YamatoSubsHistory $YamatoSubsHistory)
    {
        $this->YamatoSubsHistories->removeElement($YamatoSubsHistory);
    }
}
