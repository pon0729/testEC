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

namespace Plugin\CategoryRecommend4\Repository;

use Eccube\Entity\Master\ProductStatus;
use Eccube\Repository\AbstractRepository;
use Plugin\CategoryRecommend4\Entity\CategoryRecommendProduct;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * CategoryRecommendProductRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRecommendProductRepository extends AbstractRepository
{
    /**
     * CouponRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategoryRecommendProduct::class);
    }

    /**
     * Find list.
     *
     * @return mixed
     *
     * @param \Eccube\Entity\Category $category
     */
    public function getCategoryRecommendList(\Eccube\Entity\Category $category)
    {
        $qb = $this->createQueryBuilder('rp')
            ->innerJoin('rp.Product', 'p');
        $qb->where('rp.visible = true')
           ->andWhere('rp.Category = :Category')
            ->setParameters([
                'Category' => $category,
            ]);
        $qb->addOrderBy('rp.sort_no', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Get max rank.
     *
     * @return mixed
     *
     * @param \Eccube\Entity\Category $category
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getMaxRank(\Eccube\Entity\Category $category)
    {
        $qb = $this->createQueryBuilder('rp')
            ->select('MAX(rp.sort_no) AS max_rank')
            ->andWhere('rp.Category = :Category')
            ->setParameters([
                'Category' => $category,
            ]);

        return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Get category recommend product by display status of product.
     *
     * @param \Eccube\Entity\Category $category
     *
     * @return array
     */
    public function getCategoryRecommendProduct(\Eccube\Entity\Category $category)
    {
        $query = $this->createQueryBuilder('rp')
            ->innerJoin('Eccube\Entity\Product', 'p', 'WITH', 'p.id = rp.Product')
            ->where('p.Status = :Disp')
            ->andWhere('rp.visible = true')
            ->andWhere('rp.Category = :Category')
            ->setParameters([
                'Category' => $category,
            ])
            ->orderBy('rp.sort_no', 'DESC')
            ->setParameter('Disp', ProductStatus::DISPLAY_SHOW)
            ->getQuery();

        return $query->getResult();
    }

    /**
     * Number of category recommend.
     *
     * @param \Eccube\Entity\Category $category
     *
     * @return mixed
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function countCategoryRecommend(\Eccube\Entity\Category $category)
    {
        $qb = $this->createQueryBuilder('rp');
        $qb->select('COUNT(rp)')
            ->andWhere('rp.Category = :Category')
            ->setParameters([
                'Category' => $category,
            ])
        ;

        return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Move rank.
     *
     * @param array $arrRank
     *
     * @return array
     *
     * @throws \Exception
     */
    public function moveCategoryRecommendRank(array $arrRank)
    {
        $this->getEntityManager()->beginTransaction();
        $arrRankMoved = [];
        try {
            foreach ($arrRank as $recommendId => $rank) {
                /* @var $CategoryRecommend CategoryRecommendProduct */
                $CategoryRecommend = $this->find($recommendId);
                if ($CategoryRecommend->getSortno() == $rank) {
                    continue;
                }
                $arrRankMoved[$recommendId] = $rank;
                $CategoryRecommend->setSortno($rank);
                $this->getEntityManager()->persist($CategoryRecommend);
            }
            $this->getEntityManager()->flush();
            $this->getEntityManager()->commit();
        } catch (\Exception $e) {
            $this->getEntityManager()->rollback();
            throw $e;
        }

        return $arrRankMoved;
    }

    /**
     * Save category recommend.
     *
     * @param CategoryRecommendProduct $CategoryRecommendProduct
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function saveCategoryRecommend(CategoryRecommendProduct $CategoryRecommendProduct)
    {
        $this->getEntityManager()->beginTransaction();
        try {
            $this->getEntityManager()->persist($CategoryRecommendProduct);
            $this->getEntityManager()->flush($CategoryRecommendProduct);
            $this->getEntityManager()->commit();
        } catch (\Exception $e) {
            $this->getEntityManager()->rollback();
            throw $e;
        }

        return true;
    }

    /**
     * Get all id of category recommend product.
     *
     * @param \Eccube\Entity\Category $category
     *
     * @return array
     */
    public function getCategoryRecommendProductIdAll(\Eccube\Entity\Category $category)
    {
        $query = $this->createQueryBuilder('rp')
            ->select('IDENTITY(rp.Product) as id')
            ->where('rp.visible = true')
            ->andWhere('rp.Category = :Category')
            ->setParameters([
                'Category' => $category,
            ])
            ->getQuery();
        $arrReturn = $query->getScalarResult();

        return array_map('current', $arrReturn);
    }

    /**
     * おすすめ商品情報を削除する
     *
     * @param CategoryRecommendProduct $CategoryRecommendProduct
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function deleteCategoryRecommend(CategoryRecommendProduct $CategoryRecommendProduct)
    {
        // おすすめ商品情報を書き換える
        $CategoryRecommendProduct->setVisible(false);

        // おすすめ商品情報を登録する
        return $this->saveCategoryRecommend($CategoryRecommendProduct);
    }
}
