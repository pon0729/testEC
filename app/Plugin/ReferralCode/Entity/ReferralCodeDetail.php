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

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityNotFoundException;

/**
 * ReferralCodeDetail
 *
 * @ORM\Table(name="plg_referral_code_detail")
 * @ORM\Entity(repositoryClass="Plugin\ReferralCode\Repository\ReferralCodeDetailRepository")
 */
class ReferralCodeDetail
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
     * @var ReferralCode
     *
     * @ORM\ManyToOne(targetEntity="Plugin\ReferralCode\Entity\ReferralCode", inversedBy="ReferralCodeDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="referral_code_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $ReferralCode;

    /**
     * 商品に対して割引、カテゴリに対して割引、全商品割引の3つ
     * @var int
     *
     * @ORM\Column(name="referral_code_type", type="integer", nullable=true, options={"unsigned":true})
     */
    private $referral_code_type;

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
     * @var \Eccube\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $Category;

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
     * @return ReferralCode
     */
    public function getReferralCode()
    {
        return $this->ReferralCode;
    }

    /**
     * @param ReferralCode $ReferralCode
     *
     * @return $this
     */
    public function setReferralCode($ReferralCode)
    {
        $this->ReferralCode = $ReferralCode;

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
     * @return Product
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param Product $Product
     *
     * @return $this
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;

        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param Category $Category
     *
     * @return $this
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;

        return $this;
    }

    /**
     * 親カテゴリ名を含むカテゴリ名を取得する.
     *
     * @return string
     */
    public function getCategoryFullName()
    {
        try {
            if (is_null($this->Category)) {
                return null;
            }
            $fullName = $this->Category->getName();
            // 親カテゴリがない場合はカテゴリ名を返す.
            if (is_null($this->Category->getParent())) {
                return $fullName;
            }
            // 親カテゴリ名を結合する
            $ParentCategory = $this->Category->getParent();
            while (!is_null($ParentCategory)) {
                $fullName = $ParentCategory->getName().'　＞　'.$fullName;
                $ParentCategory = $ParentCategory->getParent();
            }

            return $fullName;
        } catch (EntityNotFoundException $e) {
            return null;
        }
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
