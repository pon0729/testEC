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
use Plugin\YamatoSubscription\Entity\YamatoSubsDiscountCategory;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsDiscountCategoryRepository.
 */
class YamatoSubsDiscountCategoryRepository extends AbstractRepository
{
    /**
     * constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry
    ){
        parent::__construct($registry, YamatoSubsDiscountCategory::class);
    }

    /**
     * @return Category
     */
    public function getList()
    {
        $qb = $this->createQueryBuilder('ysc');
        $category = $qb
            ->getQuery()
            ->getResult();
        $dataArray = array();
        foreach($category as $c){
            $dataArray[] = $c->getCategory();
        }
        return $dataArray;
    }

    /**
     * @return Category
     */
    public function getListIds()
    {
        $qb = $this->createQueryBuilder('ysc');
        $category = $qb
            ->getQuery()
            ->getResult();
        $dataArray = array();
        foreach($category as $c){
            $dataArray[] = $c->getCategory()->getId();
        }
        return $dataArray;
    }

    //一括削除
    public function bulkDelete()
    {
        $this
            ->createQueryBuilder('ysc')
            ->delete()
            ->getQuery()
            ->execute();        
    }

}
