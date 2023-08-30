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

namespace Plugin\CategoryRecommend4\Controller;

use Eccube\Controller\AbstractController;
use Eccube\Form\Type\Admin\SearchProductType;
use Eccube\Entity\Category;
use Plugin\CategoryRecommend4\Entity\CategoryRecommendProduct;
use Plugin\CategoryRecommend4\Form\Type\CategoryRecommendProductType;
use Plugin\CategoryRecommend4\Repository\CategoryRecommendProductRepository;
use Plugin\CategoryRecommend4\Service\CategoryRecommendService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CategoryRecommendController.
 */
class CategoryRecommendController extends AbstractController
{
    /**
     * @var CategoryRecommendProductRepository
     */
    private $recommendCategoryProductRepository;

    /**
     * @var CategoryRecommendService
     */
    private $recommendService;

    /**
     * CategoryRecommendController constructor.
     *
     * @param CategoryRecommendProductRepository $recommendCategoryProductRepository
     * @param CategoryRecommendService $recommendService
     */
    public function __construct(CategoryRecommendProductRepository $recommendCategoryProductRepository, CategoryRecommendService $recommendService)
    {
        $this->recommendCategoryProductRepository = $recommendCategoryProductRepository;
        $this->recommendService = $recommendService;
    }

    /**
     * @Route("/%eccube_admin_route%/product/category/{id}/recommend", requirements={"id" = "\d+"}, name="admin_product_recommend_category")
     * @Template("@CategoryRecommend4/admin/index.twig")
     */
    public function index(Request $request, Category $Category = null)
    {
        $pagination = $this->recommendCategoryProductRepository->getCategoryRecommendList($Category);

        return [
            'pagination' => $pagination,
            'Category' => $Category,
            'total_item_count' => count($pagination),
        ];
    }

    /**
     * Create & Edit.
     *
     * @param Request     $request
     * @param Category    $Category
     * @param int         $rid
     *
     * @throws \Exception
     *
     * @return array|RedirectResponse
     * @Route("/%eccube_admin_route%/product/category/{id}/recommend/new", name="plugin_category_recommend_new", requirements={"id" = "\d+"})
     * @Route("/%eccube_admin_route%/product/category/{id}/recommend/{rid}/edit", name="plugin_category_recommend_edit", requirements={"id" = "\d+","rid" = "\d+"})
     * @Template("@CategoryRecommend4/admin/regist.twig")
     */
    public function edit(Request $request, Category $Category = null, $rid = null)
    {
        /* @var CategoryRecommendProduct $Recommend */
        $Recommend = null;
        $Product = null;
        $id = $rid;

        if (!is_null($id)) {
            // IDからおすすめ商品情報を取得する
            $Recommend = $this->recommendCategoryProductRepository->find($id);

            if (!$Recommend) {
                $this->addError('plugin_category_recommend.admin.not_found', 'admin');
                log_info('The category recommend product is not found.', ['Category Recommend id' => $id]);

                return $this->redirectToRoute('admin_product_recommend_category', ['id' => $Category->getId()]);
            }

            $Product = $Recommend->getProduct();
        }

        // formの作成
        /* @var Form $form */
        $form = $this->formFactory
            ->createBuilder(CategoryRecommendProductType::class, $Recommend)
            ->getForm();

        $form->handleRequest($request);
        $data = $form->getData();
        if ($form->isSubmitted() && $form->isValid()) {
            $service = $this->recommendService;
            if (is_null($data['id'])) {
                if ($status = $service->createCategoryRecommend($data)) {
                    $this->addSuccess('plugin_category_recommend.admin.register.success', 'admin');
                    log_info('Add the new category recommend product success.', ['Product id' => $data['Product']->getId()]);
                }
            } else {
                if ($status = $service->updateCategoryRecommend($data)) {
                    $this->addSuccess('plugin_category_recommend.admin.update.success', 'admin');
                    log_info('Update the category recommend product success.', ['Recommend id' => $Recommend->getId(), 'Product id' => $data['Product']->getId()]);
                }
            }

            if (!$status) {
                $this->addError('plugin_category_recommend.admin.not_found', 'admin');
                log_info('Failed the category recommend product updating.', ['Product id' => $data['Product']->getId()]);
            }

            return $this->redirectToRoute('admin_product_recommend_category', ['id' => $data['Category']->getId()]);
        }

        if (!empty($data['Product'])) {
            $Product = $data['Product'];
        }

        $arrProductIdByRecommend = $this->recommendCategoryProductRepository->getCategoryRecommendProductIdAll($Category);

        return $this->registerView(
            [
                'form' => $form->createView(),
                'category_recommend_products' => json_encode($arrProductIdByRecommend),
                'Category' => $Category,
                'Product' => $Product,
            ]
        );
    }

    /**
     * おすすめ商品の削除.
     *
     * @param Request     $request
     * @param CategoryRecommendProduct $CategoryRecommendProduct
     *
     * @throws \Exception
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/%eccube_admin_route%/product/category/recommend/{id}/delete", name="plugin_category_recommend_delete", requirements={"id" = "\d+"}, methods={"DELETE"})
     */
    public function delete(Request $request, CategoryRecommendProduct $CategoryRecommendProduct)
    {
        // Valid token
        $this->isTokenValid();
        // おすすめ商品情報を削除する
        if ($this->recommendCategoryProductRepository->deleteCategoryRecommend($CategoryRecommendProduct)) {
            log_info('The category recommend product delete success!', ['Recommend id' => $CategoryRecommendProduct->getId()]);
            $this->addSuccess('plugin_category_recommend.admin.delete.success', 'admin');
        } else {
            $this->addError('plugin_category_recommend.admin.not_found', 'admin');
            log_info('The category recommend product is not found.', ['Recommend id' => $CategoryRecommendProduct->getId()]);
        }

        return $this->redirectToRoute('admin_product_recommend_category', ['id' => $CategoryRecommendProduct['Category']->getId()]);
    }

    /**
     * Move rank with ajax.
     *
     * @param Request     $request
     *
     * @throws \Exception
     *
     * @return Response
     *
     * @Route("/%eccube_admin_route%/product/category/{id}/recommend/sort_no/move", name="plugin_category_recommend_rank_move", requirements={"id" = "\d+"})
     */
    public function moveRank(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $arrRank = $request->request->all();
            $arrRankMoved = $this->recommendCategoryProductRepository->moveCategoryRecommendRank($arrRank);
            log_info('Recommend move rank', $arrRankMoved);
        }

        return new Response('OK');
    }

    /**
     * 編集画面用のrender.
     *
     * @param array       $parameters
     *
     * @return array
     */
    protected function registerView($parameters = [])
    {
        // 商品検索フォーム
        $searchProductModalForm = $this->formFactory->createBuilder(SearchProductType::class)->getForm();
        $viewParameters = [
            'searchProductModalForm' => $searchProductModalForm->createView(),
        ];
        $viewParameters += $parameters;

        return $viewParameters;
    }
}
