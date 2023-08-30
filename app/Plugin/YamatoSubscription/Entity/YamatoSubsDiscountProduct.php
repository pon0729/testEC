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
 * YamatoSubsDiscountProduct
 * @ORM\Table(name="plg_yamato_subs_discount_product")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsDiscountProductRepository")
 */
class YamatoSubsDiscountProduct extends AbstractEntity
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
     * @var \Eccube\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="Eccube\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $Product;

    /**
     * Set Product.
     * @param string|null $Product
     * @return $this
     */
    public function setProduct(\Eccube\Entity\Product $Product)
    {
        $this->Product = $Product;
        return $this;
    }

    /**
     * Get Product.
     * @return string|null
     */
    public function getProduct()
    {
        return $this->Product;
    }

}
