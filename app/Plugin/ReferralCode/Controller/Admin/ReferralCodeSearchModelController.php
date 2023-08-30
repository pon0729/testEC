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

namespace Plugin\ReferralCode\Controller\Admin;

use Eccube\Controller\AbstractController;
use Eccube\Form\Type\AddCartType;
use Eccube\Repository\ProductRepository;
use Eccube\Repository\CategoryRepository;
use Knp\Component\Pager\Paginator;
use Plugin\ReferralCode\Entity\ReferralCodeDetail;
use Plugin\ReferralCode\Form\Type\Admin\ReferralCodeSearchCategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class ReferralCodeSearchModelController.
 */
class ReferralCodeSearchModelController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }
    
    /**
     * @Route("/%eccube_admin_route%/plugin/referral_code/search/product", name="plugin_referral_code_admin_search_product")
     * @Route("/%eccube_admin_route%/plugin/referral_code/search/product/page/{page_no}", requirements={"page_no" = "\d+"}, name="plugin_referral_code_admin_search_product_page")
     * @Template("@ReferralCode/admin/search_product.twig")
     */
    public function searchProduct(Request $request, $page_no = null, Paginator $paginator)
    {
        if (!($request->isXmlHttpRequest() && $this->isTokenValid())) {
            return null;
        }

        log_debug('search product start.');
        $page_count = $this->eccubeConfig['eccube_default_page_count'];
        $session = $this->session;
        $searchParameters = [];

        if ('POST' === $request->getMethod()) {
            $page_no = 1;

            $searchParameters = [
                'id' => $request->get('id'), // idと言いつつ、商品名もこれでlike検索をかけに行く
                'exist_product_id' => $request->get('exist_product_id'),
            ];

            if ($categoryId = $request->get('category_id')) {
                $Category = $this->categoryRepository->find($categoryId);
                $searchParameters['category_id'] = $Category;
            }

            $session->set('referral_code.admin.edit.product.search.parameter', $searchParameters);
            $session->set('referral_code.admin.edit.product.search.page_no', $page_no);
        } else {
            $searchParameters = (array) $session->get('referral_code.admin.edit.product.search.parameter');
            if (is_null($page_no)) {
                $page_no = intval($session->get('referral_code.admin.edit.product.search.page_no'));
            } else {
                $session->set('referral_code.admin.edit.product.search.page_no', $page_no);
            }
        }

        $qb = $this->productRepository
            ->getQueryBuilderBySearchDataForAdmin($searchParameters);

        // 除外するproduct_idを設定する
        if ( strlen($searchParameters['exist_product_id']) > 0 ) {
            $qb->andWhere($qb->expr()->notin('p.id', ':exist_product_ids'))
                ->setParameter('exist_product_ids', explode(',', $searchParameters['exist_product_id']));
        }

        /** @var \Knp\Component\Pager\Pagination\SlidingPagination $pagination */
        $pagination = $paginator->paginate(
            $qb,
            $page_no,
            $page_count,
            ['wrap-queries' => true]
        );

        /** @var $Products \Eccube\Entity\Product[] */
        $Products = $pagination->getItems();

        if (empty($Products)) {
            log_debug('search product not found.');
        }

        $forms = [];
        foreach ($Products as $Product) {
            /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
            $builder = $this->formFactory->createNamedBuilder('', AddCartType::class, null, [
                'product' => $this->productRepository->findWithSortedClassCategories($Product->getId()),
            ]);
            $addCartForm = $builder->getForm();
            $forms[$Product->getId()] = $addCartForm->createView();
        }

        return [
            'forms' => $forms,
            'Products' => $Products,
            'pagination' => $pagination,
        ];
    }

    /**
     * @Route("/%eccube_admin_route%/plugin/referral_code/search/category", name="plugin_referral_code_admin_search_category")
     * @Route("/%eccube_admin_route%/plugin/referral_code/search/category/page/{page_no}", requirements={"page_no" = "\d+"}, name="plugin_referral_code_admin_search_category_page")
     * @Template("@ReferralCode/admin/search_category.twig")
     */
    public function searchCategory(Request $request, $page_no = null, Paginator $paginator)
    {
        if (!($request->isXmlHttpRequest() && $this->isTokenValid())) {
            return null;
        }

        log_debug('search category start.');
        $page_count = $this->eccubeConfig['eccube_default_page_count'];
        $session = $this->session;
        $searchParameters = [];

        if ('POST' === $request->getMethod()) {
            $page_no = 1;

            $searchParameters = [
                'id' => $request->get('id'),
                'exist_category_id' => $request->get('exist_category_id'),
            ];

            $session->set('referral_code.admin.edit.category.search.parameter', $searchParameters);
            $session->set('referral_code.admin.edit.category.search.page_no', $page_no);
        } else {
            $searchParameters = (array) $session->get('referral_code.admin.edit.category.search.parameter');
            if (is_null($page_no)) {
                $page_no = intval($session->get('referral_code.admin.edit.category.search.page_no'));
            } else {
                $session->set('referral_code.admin.edit.category.search.page_no', $page_no);
            }
        }

        $qb = $this->categoryRepository
            ->createQueryBuilder('c')
            ->andWhere('c.id = :id OR c.name LIKE :likeid')
            ->setParameter('id', $searchParameters['id'])
            ->setParameter('likeid', '%'.str_replace(['%', '_'], ['\\%', '\\_'], $searchParameters['id']).'%')
        ;

        // 除外するcategory_idを設定する
        if (strlen($searchParameters['exist_category_id']) > 0) {
            $qb->andWhere($qb->expr()->notin('c.id', ':exist_category_ids'))
                ->setParameter('exist_category_ids', explode(',', $searchParameters['exist_category_id']));
        }

        /** @var \Knp\Component\Pager\Pagination\SlidingPagination $pagination */
        $pagination = $paginator->paginate(
            $qb,
            $page_no,
            $page_count,
            ['wrap-queries' => true]
        );

        /** @var $Products \Eccube\Entity\Category[] */
        $Categories = $pagination->getItems();

        if (empty($Categories)) {
            log_debug('search category not found.');
        }

        $forms = [];
        foreach ($Categories as $Category) {
            $Category->setName($this->getCategoryFullName($Category)); // 階層を含めた名称にする
            /* @var $builder \Symfony\Component\Form\FormBuilderInterface */
            $builder = $this->formFactory->createNamedBuilder('', ReferralCodeSearchCategoryType::class, null, [
                'category' => $Category,
            ]);
            $categoryForm = $builder->getForm();
            $forms[$Category->getId()] = $categoryForm->createView();
        }

        return [
            'forms' => $forms,
            'Categories' => $Categories,
            'pagination' => $pagination,
        ];
    }

    protected function getCategoryFullName($Category)
    {
        $referralCodeDetail = new ReferralCodeDetail();
        $referralCodeDetail->setCategory($Category);
        return $referralCodeDetail->getCategoryFullName();
    }
}
