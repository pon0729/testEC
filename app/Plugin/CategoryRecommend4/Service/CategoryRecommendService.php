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

namespace Plugin\CategoryRecommend4\Service;

use Plugin\CategoryRecommend4\Entity\CategoryRecommendProduct;
use Plugin\CategoryRecommend4\Repository\CategoryRecommendProductRepository;

/**
 * Class CategoryRecommendService.
 */
class CategoryRecommendService
{
    /**
     * @var CategoryRecommendProductRepository
     */
    private $recommendCategoryProductRepository;

    /**
     * CategoryRecommendService constructor.
     *
     * @param CategoryRecommendProductRepository $recommendCategoryProductRepository
     */
    public function __construct(CategoryRecommendProductRepository $recommendCategoryProductRepository)
    {
        $this->recommendCategoryProductRepository = $recommendCategoryProductRepository;
    }

    /**
     * おすすめ商品情報を新規登録する
     *
     * @param $data
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function createCategoryRecommend($data)
    {
        // おすすめ商品詳細情報を生成する
        $CategoryRecommend = $this->newCategoryRecommend($data);

        return $this->recommendCategoryProductRepository->saveCategoryRecommend($CategoryRecommend);
    }

    /**
     * おすすめ商品情報を更新する
     *
     * @param $data
     *
     * @return bool
     *
     * @throws \Exception
     */
    public function updateCategoryRecommend($data)
    {
        // おすすめ商品情報を取得する
        $CategoryRecommend = $this->recommendCategoryProductRepository->find($data['id']);
        if (!$CategoryRecommend) {
            return false;
        }

        // おすすめ商品情報を書き換える
        $CategoryRecommend->setComment($data['comment']);
        $CategoryRecommend->setProduct($data['Product']);

        // おすすめ商品情報を更新する
        return $this->recommendCategoryProductRepository->saveCategoryRecommend($CategoryRecommend);
    }

    /**
     * おすすめ商品情報を生成する
     *
     * @param $data
     *
     * @return CategoryRecommendProduct
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    protected function newCategoryRecommend($data)
    {
        $rank = $this->recommendCategoryProductRepository->getMaxRank($data['Category']);

        $CategoryRecommend = new CategoryRecommendProduct();
        $CategoryRecommend->setComment($data['comment']);
        $CategoryRecommend->setProduct($data['Product']);
        $CategoryRecommend->setCategory($data['Category']);
        $CategoryRecommend->setSortno(($rank ? $rank : 0) + 1);
        $CategoryRecommend->setVisible(true);

        return $CategoryRecommend;
    }
}
