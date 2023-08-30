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

namespace Plugin\ReferralCode\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReferralCode
 *
 * @ORM\Table(name="plg_referral_code")
 * @ORM\Entity(repositoryClass="Plugin\ReferralCode\Repository\ReferralCodeRepository")
 */
class ReferralCode
{
    const PRODUCT = 1;
    const CATEGORY = 2;
    const ALL = 3;

    const DISCOUNT_PRICE = 1;
    const DISCOUNT_RATE = 2;

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
     * @ORM\Column(name="referral_code", type="string", nullable=true)
     */
    private $referral_code;

    /**
     * @var int
     *
     * @ORM\Column(name="referral_code_type", type="integer", nullable=true, options={"unsigned":true})
     */
    private $referral_code_type;

    /**
     * @var string
     *
     * @ORM\Column(name="referral_code_name", type="string")
     */
    private $referral_code_name;

    /**
     * @var int
     *
     * @ORM\Column(name="discount_type", type="integer", nullable=true, options={"unsigned":true})
     */
    private $discount_type;

    /**
     * @var int
     *
     * @ORM\Column(name="referral_code_use_time", type="integer", nullable=true, options={"unsigned":true})
     */
    private $referral_code_use_time;

    /**
     * @var int
     *
     * @ORM\Column(name="referral_code_release", type="integer", options={"unsigned":true})
     */
    private $referral_code_release;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_price", type="decimal", nullable=true, precision=10, scale=0, options={"unsigned":true})
     */
    private $discount_price;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_rate", type="decimal", nullable=true, precision=10, scale=0, options={"unsigned":true})
     */
    private $discount_rate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_flag", type="boolean")
     */
    private $enable_flag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="referral_code_member", type="boolean", nullable=true)
     */
    private $referral_code_member;

    /**
     * @var float
     *
     * @ORM\Column(name="referral_code_lower_limit", type="decimal", nullable=true, precision=10, scale=0, options={"unsigned":true})
     */
    private $referral_code_lower_limit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="available_from_date", type="datetimetz")
     */
    private $available_from_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="available_to_date", type="datetimetz")
     */
    private $available_to_date;

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
     * @ORM\OneToMany(targetEntity="Plugin\ReferralCode\Entity\ReferralCodeDetail", mappedBy="ReferralCode", cascade={"persist","remove"})
     */
    private $ReferralCodeDetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ReferralCodeDetails = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referral_code;
    }

    /**
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
     * @return int
     */
    public function getReferralCodeType()
    {
        return $this->referral_code_type;
    }

    /**
     * @param int $referral_code_type
     *
     * @return $this
     */
    public function setReferralCodeType($referral_code_type)
    {
        $this->referral_code_type = $referral_code_type;

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
     * @return int
     */
    public function getDiscountType()
    {
        return $this->discount_type;
    }

    /**
     * @param int $discount_type
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->discount_type = $discount_type;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferralCodeUseTime()
    {
        return $this->referral_code_use_time;
    }

    /**
     * @param int $referral_code_use_time
     *
     * @return $this
     */
    public function setReferralCodeUseTime($referral_code_use_time)
    {
        $this->referral_code_use_time = $referral_code_use_time;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferralCodeRelease()
    {
        return $this->referral_code_release;
    }

    /**
     * @param int $referral_code_release
     *
     * @return $this
     */
    public function setReferralCodeRelease($referral_code_release)
    {
        $this->referral_code_release = $referral_code_release;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPrice()
    {
        return $this->discount_price;
    }

    /**
     * @param float $discount_price
     *
     * @return $this
     */
    public function setDiscountPrice($discount_price)
    {
        $this->discount_price = $discount_price;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discount_rate;
    }

    /**
     * @param float $discount_rate
     *
     * @return $this
     */
    public function setDiscountRate($discount_rate)
    {
        $this->discount_rate = $discount_rate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->enable_flag;
    }

    /**
     * @param bool $enable_flag
     * @return $this
     */
    public function setEnableFlag($enable_flag)
    {
        $this->enable_flag = $enable_flag;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReferralCodeMember()
    {
        return $this->referral_code_member;
    }

    /**
     * @param bool $referral_code_member
     * @return $this
     */
    public function setReferralCodeMember($referral_code_member)
    {
        $this->referral_code_member = $referral_code_member;

        return $this;
    }

    /**
     * @return float
     */
    public function getReferralCodeLowerLimit()
    {
        return $this->referral_code_lower_limit;
    }

    /**
     * @param float $referral_code_lower_limit
     *
     * @return $this
     */
    public function setReferralCodeLowerLimit($referral_code_lower_limit)
    {
        $this->referral_code_lower_limit = $referral_code_lower_limit;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAvailableFromDate()
    {
        return $this->available_from_date;
    }

    /**
     * @param \DateTime $available_from_date
     * @return $this
     */
    public function setAvailableFromDate($available_from_date)
    {
        $this->available_from_date = $available_from_date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAvailableToDate()
    {
        return $this->available_to_date;
    }

    /**
     * @param \DateTime $available_to_date
     * @return $this
     */
    public function setAvailableToDate($available_to_date)
    {
        $this->available_to_date = $available_to_date;

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
     * Get ReferralCodeDetails.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferralCodeDetails()
    {
        return $this->ReferralCodeDetails;
    }

    /**
     * @param ArrayCollection $ReferralCodeDetails
     * @return $this
     */
    public function setReferralCodeDetails($ReferralCodeDetails)
    {
        $this->ReferralCodeDetails = $ReferralCodeDetails;

        return $this;
    }

    /**
     * Add ReferralCodeDetail.
     *
     * @param ReferralCodeDetail $ReferralCodeDetail
     *
     * @return $this
     */
    public function addReferralCodeDetail(ReferralCodeDetail $ReferralCodeDetail)
    {
        $this->ReferralCodeDetails[] = $ReferralCodeDetail;

        return $this;
    }

    /**
     * Remove ReferralCodeDetail.
     *
     * @param ReferralCodeDetail $ReferralCodeDetail
     */
    public function removeReferralCodeDetail(ReferralCodeDetail $ReferralCodeDetail)
    {
        $this->ReferralCodeDetails->removeElement($ReferralCodeDetail);
    }
}
