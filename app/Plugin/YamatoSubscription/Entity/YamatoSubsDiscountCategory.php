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
use Eccube\Annotation\EntityExtension;

/**
 * YamatoSubsDiscountCategory
 *
 * @ORM\Table(name="plg_yamato_subs_discount_category")
 * 
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsDiscountCategoryRepository")
 */
class YamatoSubsDiscountCategory extends AbstractEntity
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
     * @var \Eccube\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $Category;

    /**
     * Set Category.
     * @param string|null $Category
     * @return $this
     */
    public function setCategory(\Eccube\Entity\Category $Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * Get Category.
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
 
    /**
     * 親カテゴリ名を含むカテゴリ名を取得する.
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

}
