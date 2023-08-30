<?php

/*
 * This file is part of EC-CUBE
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 * http://www.ec-cube.co.jp/
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\YamatoSubscription\Controller\Admin;

use Eccube\Controller\AbstractController;
use Eccube\Form\Type\Admin\SearchProductType;
use Eccube\Repository\CategoryRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsDiscountType;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsDiscountProductType;
use Plugin\YamatoSubscription\Form\Type\Admin\SearchCategoryType;
use Plugin\YamatoSubscription\Entity\YamatoSubsDiscountCategory;
use Plugin\YamatoSubscription\Repository\YamatoSubsDiscountCategoryRepository;
use Plugin\YamatoSubscription\Entity\YamatoSubsDiscountProduct;
use Plugin\YamatoSubscription\Repository\YamatoSubsDiscountProductRepository;

class YamatoSubscriptionDiscountController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var YamatoSubsDiscountCategoryRepository
     */
    protected $yamatoSubsDiscountCategoryRepository;

    /**
     * @var YamatoSubsDiscountProductRepository
     */
    protected $yamatoSubsDiscountProductRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        YamatoSubsDiscountCategoryRepository $yamatoSubsDiscountCategoryRepository,
        YamatoSubsDiscountProductRepository $yamatoSubsDiscountProductRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->yamatoSubsDiscountCategoryRepository = $yamatoSubsDiscountCategoryRepository;
        $this->yamatoSubsDiscountProductRepository = $yamatoSubsDiscountProductRepository;
    }

    /**
     * 定期配送 詳細画面
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/discount/setting", name="plugin_yamato_subscription_admin_discount_list", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/admin/Order/discount.twig")
     * @param Request $request
     * @return array
     */
    public function index(Request $request, RouterInterface $router) {
        //カテゴリフォーム
        $builder = $this->formFactory->createBuilder(YamatoSubsDiscountType::class);
        $form = $builder->getForm();

        //現状の設定リスト
        $SettingCategories = $this->yamatoSubsDiscountCategoryRepository->getList();
        $form['Category']->setData($SettingCategories);
        //商品設定リスト
        $SettingProducts = $this->yamatoSubsDiscountProductRepository->getList();
        $form['DiscountProduct']->setData($SettingProducts);
        foreach ($form->get('DiscountProduct') as $index => $DiscountProductForm) {
            $Product = $SettingProducts[$index];
            $DiscountProductForm['Product']->setData($Product);
        }
        // ツリー表示のため、ルートからのカテゴリを取得
        $TopCategories = $this->categoryRepository->getList(null);
        $ChoicedCategoryIds = array_map(function ($Category) {
            return $Category->getId();
        }, $form->get('Category')->getData());

        //プロダクト検索フォーム
        $builder = $this->formFactory->createBuilder(YamatoSubsDiscountProductType::class, null);
        $productForm = $builder->getForm();

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $this->entityManager->getConnection()->beginTransaction();
                try {
                    //カテゴリ設定追加
                    $Categories = $form['Category']->getData();
                    $this->yamatoSubsDiscountCategoryRepository->bulkDelete();
                    foreach ($Categories as $Category) {
                        $DiscountCategory = new YamatoSubsDiscountCategory();
                        $DiscountCategory->setCategory($Category);
                        $this->entityManager->persist($DiscountCategory);
                    }
                    //商品設定
                    $this->yamatoSubsDiscountProductRepository->bulkDelete();
                    $Products = $form['DiscountProduct']->getData();
                    $productArray = array();
                    foreach ($Products as $Product) {
                        //Addと既存でname配列が異なる為調整
                        if(!empty($Product['Product'])){
                            $Product = $Product['Product'];
                        }
                        //Frontend側で2重のProductがあった場合
                        if(in_array($Product->getId(), $productArray,true) == true){
                            continue;
                        }
                        $DiscountProduct = new YamatoSubsDiscountProduct();
                        $DiscountProduct->setProduct($Product);
                        $this->entityManager->persist($DiscountProduct);
                        $productArray[] = $Product->getId();
                    }
                    $this->entityManager->flush();
                    $this->entityManager->getConnection()->commit();
                    $this->addSuccess('admin.common.save_complete', 'admin');
                    return $this->redirectToRoute('plugin_yamato_subscription_admin_discount_list');
                } catch (\Exception $e) {
                    log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                    $this->entityManager->getConnection()->rollback();
                    $this->addError('admin.common.save_error', 'admin');
                }
            }
        }

        return $this->combineSearchFormParameters([
            'form' => $form->createView(),
            'TopCategories' => $TopCategories,
            'ChoicedCategoryIds' => $ChoicedCategoryIds,
            'productForm' => $productForm,
        ]);            
    }

    /**
     * 商品検索フォームとカテゴリ検索フォームをパラメータに追加して返す.
     * @param array $parameters
     * @return array result parameters
     */
    protected function combineSearchFormParameters($parameters = [])
    {
        $searchProductModalForm = $this->formFactory->createBuilder(SearchProductType::class)->getForm();
        $searchCategoryModalForm = $this->formFactory->createBuilder(SearchCategoryType::class)->getForm();
        $viewParameters = [
            'searchProductModalForm' => $searchProductModalForm->createView(),
            'searchCategoryModalForm' => $searchCategoryModalForm->createView(),
        ];
        $viewParameters += $parameters;
        return $viewParameters;
    }

}
