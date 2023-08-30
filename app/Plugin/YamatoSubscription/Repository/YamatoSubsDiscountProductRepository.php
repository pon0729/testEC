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

namespace Plugin\YamatoSubscription\Repository;
use Plugin\YamatoSubscription\Entity\YamatoSubsDiscountProduct;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsDiscountProductRepository.
 */
class YamatoSubsDiscountProductRepository extends AbstractRepository
{
    /**
     * constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry
    ){
        parent::__construct($registry, YamatoSubsDiscountProduct::class);
    }

    /**
     * @return Product
     */
    public function getList()
    {
        $qb = $this->createQueryBuilder('ysp');
        $product = $qb
            ->getQuery()
            ->getResult();
        $dataArray = array();
        foreach($product as $p){
            $dataArray[] = $p->getProduct();
        }
        return $dataArray;
    }

    /**
     * @return Product
     */
    public function getListIds()
    {
        $qb = $this->createQueryBuilder('ysp');
        $product = $qb
            ->getQuery()
            ->getResult();
        $dataArray = array();
        foreach($product as $p){
            $dataArray[] = $p->getProduct()->getId();
        }
        return $dataArray;
    }

    //一括削除
    public function bulkDelete()
    {
        $this
            ->createQueryBuilder('ysp')
            ->delete()
            ->getQuery()
            ->execute();        
    }

}
