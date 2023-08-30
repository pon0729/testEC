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

namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class TopController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @Template("index.twig")
     */
    public function index()
    {
        // fetch new arrival category products
        $ProductCategoryRepository = $this->entityManager->getRepository('Eccube\Entity\ProductCategory');
        $new_arrival_products = $ProductCategoryRepository->createQueryBuilder('pca')
            ->select('pca, p')
            ->innerJoin('pca.Product', 'p')
            ->innerJoin('p.ProductImage', 'pi')
            ->innerJoin('p.ProductClasses', 'pcl')
            ->innerJoin('pca.Category', 'c')
            ->andWhere('c.name = :new_arrival')
            ->setParameter('new_arrival', 'NEW ARRIVAL')
            ->andWhere('pi.sort_no = 1')
            ->andWhere('p.Status = 1')
            ->orderBy('p.update_date', 'desc')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        return ['new_arrival_products' => $new_arrival_products];
    }
}
