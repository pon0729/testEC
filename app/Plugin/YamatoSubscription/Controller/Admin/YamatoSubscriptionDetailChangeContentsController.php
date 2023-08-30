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

namespace Plugin\YamatoSubscription\Controller\Admin;

use Doctrine\Common\Collections\ArrayCollection;
use Eccube\Controller\AbstractController;
use Eccube\Entity\Master\OrderItemType;
use Eccube\Entity\Master\TaxType;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\AddCartType;
use Eccube\Form\Type\Admin\SearchProductType;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\DeliveryRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\ProductRepository;
use Eccube\Service\PurchaseFlow\ItemCollection;
use Eccube\Service\PurchaseFlow\Processor\OrderNoProcessor;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseException;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Knp\Component\Pager\Paginator;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsUsersOrderType;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsHistoryRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderItemRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersReferralCodeOrderRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersShippingRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Serializer\SerializerInterface;

class YamatoSubscriptionDetailChangeContentsController extends AbstractController
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @var PurchaseFlow
     */
    protected $purchaseFlow;

    /**
     * @var OrderNoProcessor
     */
    protected $orderNoProcessor;

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var DeliveryRepository
     */
    protected $deliveryRepository;

    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    /**
     * @var YamatoSubsHistoryRepository
     */
    protected $yamatoSubsHistoryRepository;

    /**
     * @var YamatoSubsUsersOrderRepository
     */
    protected $yamatoSubsUsersOrderRepository;

    /**
     * @var YamatoSubsUsersOrderItemRepository
     */
    protected $yamatoSubsUsersOrderItemRepository;

    /**
     * @var YamatoSubsUsersShippingRepository
     */
    protected $yamatoSubsUsersShippingRepository;

    /**
     * @var YamatoSubsUsersReferralCodeOrderRepository
     */
    protected $yamatoSubsUsersReferralCodeOrderRepository;

    public function __construct(
        SerializerInterface $serializer,
        PurchaseFlow $orderPurchaseFlow,
        OrderNoProcessor $orderNoProcessor,
        CategoryRepository $categoryRepository,
        DeliveryRepository $deliveryRepository,
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
        YamatoSubsRepository $yamatoSubsRepository,
        YamatoSubsHistoryRepository $yamatoSubsHistoryRepository,
        YamatoSubsUsersOrderRepository $yamatoSubsUsersOrderRepository,
        YamatoSubsUsersOrderItemRepository $yamatoSubsUsersOrderItemRepository,
        YamatoSubsUsersShippingRepository $yamatoSubsUsersShippingRepository,
        YamatoSubsUsersReferralCodeOrderRepository $yamatoSubsUsersReferralCodeOrderRepository
    ) {
        $this->serializer = $serializer;
        $this->purchaseFlow = $orderPurchaseFlow;
        $this->orderNoProcessor = $orderNoProcessor;
        $this->categoryRepository = $categoryRepository;
        $this->deliveryRepository = $deliveryRepository;
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsHistoryRepository = $yamatoSubsHistoryRepository;
        $this->yamatoSubsUsersOrderRepository = $yamatoSubsUsersOrderRepository;
        $this->yamatoSubsUsersOrderItemRepository = $yamatoSubsUsersOrderItemRepository;
        $this->yamatoSubsUsersShippingRepository = $yamatoSubsUsersShippingRepository;
        $this->yamatoSubsUsersReferralCodeOrderRepository = $yamatoSubsUsersReferralCodeOrderRepository;
    }



    /**
     * 定期配送 詳細画面
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/detail/{id}/change_contents", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_admin_detail_change_contents", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/admin/Detail/ChangeContents/index.twig")
     *
     * @param Request $request
     * @param int $id
     *
     * @return array
     */
    public function index(Request $request, int $id, RouterInterface $router) {
        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['visible' => true, 'id' => $id, 'cancelled_date' => null]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

        $YamatoSubsUsersOrder = $this->yamatoSubsUsersOrderRepository->findOrderBy($YamatoSubs);

        if (!$YamatoSubsUsersOrder) {
            $this->entityManager->getConnection()->beginTransaction();
            try {
                /*
                 * 商品などを変更可能にする前から本プラグインを使っているユーザーも居る。
                 * 対象のユーザーには最後の定期購入受注からデータを取得→保持テーブルに登録してから再取得する。
                 */
                $YamatoSubsUsersOrder = $this->yamatoSubsRepository->registerYamatoSubsUsersOrderFromLastSubsOrder($YamatoSubs);

                $this->entityManager->getConnection()->commit();
            } catch (\Exception $e) {
                log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                $this->entityManager->getConnection()->rollback();
                $this->addError('yamatosubscription.system.error');
                return $this->redirectToRoute($request->get('_route'), ['id' => $id]);
            }
        }

        $YamatoSubsUsersOrderItems =
            $this->yamatoSubsUsersOrderItemRepository->findOrderItemsBy($YamatoSubsUsersOrder);
        $YamatoSubsUsersShippings =
            $this->yamatoSubsUsersShippingRepository->findShippingsBy($YamatoSubsUsersOrder);
        $YamatoSubsUsersReferralCodeOrder =
            $this->yamatoSubsUsersReferralCodeOrderRepository->findReferralCodeOrderBy($YamatoSubsUsersOrder);

        $builder = $this->formFactory->createBuilder(YamatoSubsUsersOrderType::class, $YamatoSubsUsersOrder);

        $form = $builder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form['YamatoSubsUsersOrderItemsErrors']->isValid()) {
            $PostedYamatoSubsUsersOrderItems = $form->get('YamatoSubsUsersOrderItems')->getData();
            switch ($request->get('mode')) {
                case 'register':
                    log_info('start to register: yamato_subs_users_order_id', [$YamatoSubsUsersOrder->getId()]);

                    $this->entityManager->getConnection()->beginTransaction();
                    try {
                        [$TempOrder, $TempOrderItems, $TempShippings, $TempReferralCodeOrder] =
                            $this->saveTempOrder(
                                $YamatoSubsUsersOrder,
                                $PostedYamatoSubsUsersOrderItems,
                                $YamatoSubsUsersShippings,
                                $YamatoSubsUsersReferralCodeOrder
                            );
                        $this->entityManager->flush();

                        $OriginOrder = clone $TempOrder;
                        $purchaseContext = new PurchaseContext($OriginOrder, $OriginOrder->getCustomer());
                        $flowResult = $this->purchaseFlow->validate($TempOrder, $purchaseContext);

                        if ($flowResult->hasWarning()) {
                            foreach ($flowResult->getWarning() as $warning) {
                                $this->addWarning($warning->getMessage(), 'admin');
                            }
                        }
                        if ($flowResult->hasError()) {
                            foreach ($flowResult->getErrors() as $error) {
                                $this->addError($error->getMessage(), 'admin');
                            }
                        }

                        if ($flowResult->hasError() || !$form->isValid()) {
                            throw new \Exception('purchaseflow error');
                        }

                        $this->purchaseFlow->prepare($TempOrder, $purchaseContext);
                        $this->purchaseFlow->commit($TempOrder, $purchaseContext);
                        $this->entityManager->flush();

                        // 新規登録時はMySQL対応のためflushしてから採番
                        $TempOrder->setOrderNo(null);
                        $this->orderNoProcessor->process($TempOrder, $purchaseContext);
                        $this->entityManager->flush();

                        // 定期受注テーブルを更新
                        [$YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems, $YamatoSubsUsersReferralCodeOrder] =
                            $this->updateYamatoSubsUsersOrderTablesFrom(
                                $YamatoSubsUsersOrder,
                                $YamatoSubsUsersOrderItems,
                                $YamatoSubsUsersShippings,
                                $YamatoSubsUsersReferralCodeOrder,
                                $TempOrder,
                                $TempOrderItems,
                                $TempShippings,
                                $TempReferralCodeOrder
                            );
                        
                        //DeliveryCountReset
                        if(!empty($form['delivery_count_reset']->getData())){
                            $YamatoSubs->setDeliveryCount(0);
                            $this->entityManager->flush();
                        }

                        // 一時的に作成した受注テーブルを全て削除
                        $this->removeTempOrderTables($TempOrder, $TempReferralCodeOrder);

                        $this->entityManager->getConnection()->commit();
                    } catch (\Exception $e) {
                        log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                        $this->entityManager->getConnection()->rollback();
                        $this->addError('admin.common.save_error', 'admin');
                        break;
                    }

                    $this->addInfo('yamatosubscription.admin.detail_change_contents.save_message', 'admin');
                    $this->addSuccess('admin.common.save_complete', 'admin');

                    log_info('end to register: yamato_subs_users_order_id', [$YamatoSubsUsersOrder->getId()]);

                    if ($returnLink = $form->get('return_link')->getData()) {
                        try {
                            // $returnLinkはpathの形式で渡される. pathが存在するかをルータでチェックする.
                            $pattern = '/^'.preg_quote($request->getBasePath(), '/').'/';
                            $returnLink = preg_replace($pattern, '', $returnLink);
                            $result = $router->match($returnLink);
                            // パラメータのみ抽出
                            $params = array_filter($result, function ($key) {
                                return 0 !== \strpos($key, '_');
                            }, ARRAY_FILTER_USE_KEY);

                            // pathからurlを再構築してリダイレクト.
                            return $this->redirectToRoute($result['_route'], $params);
                        } catch (\Exception $e) {
                            // マッチしない場合はログ出力してスキップ.
                            log_warning('URLの形式が不正です。');
                        }
                    }

                    return $this->redirectToRoute($request->get('_route'), ['id' => $id]);

                    break;

                case 'calc':
                    $this->entityManager->getConnection()->beginTransaction();
                    try {
                        [$TempOrder, $TempOrderItems, $TempShippings, $TempReferralCodeOrder] =
                            $this->saveTempOrder(
                                $YamatoSubsUsersOrder,
                                $PostedYamatoSubsUsersOrderItems,
                                $YamatoSubsUsersShippings,
                                $YamatoSubsUsersReferralCodeOrder
                            );

                        $OriginOrder = clone $TempOrder;
                        $purchaseContext = new PurchaseContext($OriginOrder, $OriginOrder->getCustomer());
                        $flowResult = $this->purchaseFlow->validate($TempOrder, $purchaseContext);

                        if ($flowResult->hasWarning()) {
                            foreach ($flowResult->getWarning() as $warning) {
                                $this->addWarning($warning->getMessage(), 'admin');
                            }
                        }
                        if ($flowResult->hasError()) {
                            foreach ($flowResult->getErrors() as $error) {
                                $this->addError($error->getMessage(), 'admin');
                            }
                        }

                        if ($flowResult->hasError() || !$form->isValid()) {
                            throw new \Exception('purchaseflow error');
                        }

                        // 定期受注テーブルを更新
                        [$YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems, $YamatoSubsUsersReferralCodeOrder] =
                            $this->updateYamatoSubsUsersOrderTablesFrom(
                                $YamatoSubsUsersOrder,
                                $YamatoSubsUsersOrderItems,
                                $YamatoSubsUsersShippings,
                                $YamatoSubsUsersReferralCodeOrder,
                                $TempOrder,
                                $TempOrderItems,
                                $TempShippings,
                                $TempReferralCodeOrder
                            );

                        // rollbackしてDBには保存しない
                        $this->entityManager->getConnection()->rollback();
                    } catch (\Exception $e) {
                        log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                        $this->entityManager->getConnection()->rollback();
                        $this->addError('yamatosubscription.admin.detail_change_contents.error.calculate', 'admin');
                        break;
                    }
                    break;
                case 'reset_counter':
                    //定期回数リセットのみ
                    $this->entityManager->getConnection()->beginTransaction();
                    try {
                        $deliveryCounter = $form['delivery_count_update']->getData();
                        $YamatoSubs->setDeliveryCount($deliveryCounter);
                        $this->entityManager->persist($YamatoSubs);
                        $this->entityManager->flush();
                        $this->entityManager->getConnection()->commit();
                    } catch (\Exception $e) {
                        log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                        $this->entityManager->getConnection()->rollback();
                        $this->addError('yamatosubscription.admin.detail_change_contents.error.calculate', 'admin');
                        break;
                    }
                    $this->addSuccess('admin.common.save_complete', 'admin');
                    return $this->redirectToRoute($request->get('_route'), ['id' => $id]);
                    break;
                default:
                    break;
            }
        }

        // calcの時など、空になっちゃうのでセットし直す
        $YamatoSubsUsersOrder->setYamatoSubsUsersOrderItems($YamatoSubsUsersOrderItems);

        // 商品検索フォーム
        $builder = $this->formFactory->createBuilder(SearchProductType::class);
        $searchProductModalForm = $builder->getForm();

        // 配送業者のお届け時間
        $times = [];
        $deliveries = $this->deliveryRepository->findAll();
        foreach ($deliveries as $Delivery) {
            $deliveryTimes = $Delivery->getDeliveryTimes();
            foreach ($deliveryTimes as $DeliveryTime) {
                $times[$Delivery->getId()][$DeliveryTime->getId()] = $DeliveryTime->getDeliveryTime();
            }
        }

        return [
            'form' => $form->createView(),
            'searchProductModalForm' => $searchProductModalForm->createView(),
            'YamatoSubsUsersOrder' => $YamatoSubsUsersOrder,
            'YamatoSubs' => $YamatoSubs,
            'id' => $id,
            'shippingDeliveryTimes' => $this->serializer->serialize($times, 'json'),
        ];
    }

    /**
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/search/product", name="plugin_yamato_subscription_admin_search_product", methods={"GET", "POST"})
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/search/product/page/{page_no}", requirements={"page_no" = "\d+"}, name="plugin_yamato_subscription_admin_search_product_page", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/admin/Detail/ChangeContents/search_product.twig")
     */
    public function searchProduct(Request $request, $page_no = null, Paginator $paginator)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            log_debug('search product start.');
            $page_count = $this->eccubeConfig['eccube_default_page_count'];
            $session = $this->session;

            if ('POST' === $request->getMethod()) {
                $page_no = 1;

                $searchData = [
                    'id' => $request->get('id'),
                    'status' => \Eccube\Entity\Master\ProductStatus::DISPLAY_SHOW, // デフォルトで公開のもののみ抽出
                    'exist_product_ids' => $request->get('exist_product_ids'),
                ];

                if ($categoryId = $request->get('category_id')) {
                    $Category = $this->categoryRepository->find($categoryId);
                    $searchData['category_id'] = $Category;
                }

                $session->set('yamatosubscription.admin.detail_change_contents.product.search', $searchData);
                $session->set('yamatosubscription.admin.detail_change_contents.product.search.page_no', $page_no);
            } else {
                $searchData = (array) $session->get('yamatosubscription.admin.detail_change_contents.product.search');
                if (is_null($page_no)) {
                    $page_no = intval($session->get('yamatosubscription.admin.detail_change_contents.product.search.page_no'));
                } else {
                    $session->set('yamatosubscription.admin.detail_change_contents.product.search.page_no', $page_no);
                }
            }

            $qb = $this->productRepository
                ->getQueryBuilderBySearchDataForAdmin($searchData);

            // 除外するproduct_idを設定する
            if ( strlen($searchData['exist_product_ids']) > 0 ) {
                $qb->andWhere($qb->expr()->notin('p.id', ':exist_product_ids'))
                    ->setParameter('exist_product_ids', explode(',', $searchData['exist_product_ids']));
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
    }

    /**
     * その他明細情報を取得
     *
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/search/order_item_type", name="plugin_yamato_subscription_admin_search_order_item_type", methods={"POST"})
     * @Template("@YamatoSubscription/admin/Detail/ChangeContents/order_item_type.twig")
     *
     * @param Request $request
     *
     * @return array
     */
    public function searchOrderItemType(Request $request)
    {
        if ($request->isXmlHttpRequest() && $this->isTokenValid()) {
            log_debug('search order item type start.');

            $Charge = $this->entityManager->find(OrderItemType::class, OrderItemType::CHARGE);
            $DeliveryFee = $this->entityManager->find(OrderItemType::class, OrderItemType::DELIVERY_FEE);
            $Discount = $this->entityManager->find(OrderItemType::class, OrderItemType::DISCOUNT);

            $NonTaxable = $this->entityManager->find(TaxType::class, TaxType::NON_TAXABLE);
            $Taxation = $this->entityManager->find(TaxType::class, TaxType::TAXATION);

            $OrderItemTypes = [
                ['OrderItemType' => $Charge, 'TaxType' => $Taxation],
                ['OrderItemType' => $DeliveryFee, 'TaxType' => $Taxation],
                ['OrderItemType' => $Discount, 'TaxType' => $Taxation],
                ['OrderItemType' => $Discount, 'TaxType' => $NonTaxable]
            ];

            if ($request->request->get('searchDeliveryFeeOnly')) {
                $OrderItemTypes = array_filter(
                    $OrderItemTypes,
                    function($OrderItemTypeData) use ($DeliveryFee) {
                        return $OrderItemTypeData['OrderItemType'] === $DeliveryFee;
                    }
                );
            } elseif ($request->request->get('excludeDeliveryFee')) {
                $OrderItemTypes = array_filter(
                    $OrderItemTypes,
                    function($OrderItemTypeData) use ($DeliveryFee) {
                        return $OrderItemTypeData['OrderItemType'] !== $DeliveryFee;
                    }
                );
            }

            return [
                'OrderItemTypes' => $OrderItemTypes,
            ];
        }
    }



    private function saveTempOrder(
        $YamatoSubsUsersOrder,
        $YamatoSubsUsersOrderItems,
        $YamatoSubsUsersShippings,
        $YamatoSubsUsersReferralCodeOrder
    ) {
        $TempOrder = $this->yamatoSubsUsersOrderRepository->registerOrderFrom($YamatoSubsUsersOrder);

        $TempShippings = $this->yamatoSubsUsersShippingRepository->registerShippingsFrom($TempOrder, $YamatoSubsUsersShippings);
        foreach ($TempShippings as $TempShipping) {
            $TempOrder->addShipping($TempShipping);
        }

        $TempOrderItems = $this->yamatoSubsUsersOrderItemRepository->registerOrderItemsFrom($TempOrder, $TempShippings, $YamatoSubsUsersShippings, $YamatoSubsUsersOrderItems);
        foreach ($TempOrderItems as $TempOrderItem) {
            $TempOrder->addOrderItem($TempOrderItem);
        }

        $lastSubsOrder = $this->yamatoSubsHistoryRepository
            ->findOneBy(['visible' => true, 'id' => $YamatoSubsUsersOrder->getYamatoSubs()->getLastSubsHistoryId()])
            ->getOrder();
        $TempReferralCodeOrder = $this->yamatoSubsUsersReferralCodeOrderRepository->registerReferralCodeOrderFrom(
            $lastSubsOrder, $TempOrder, $YamatoSubsUsersReferralCodeOrder
        );

        return [$TempOrder, $TempOrderItems, $TempShippings, $TempReferralCodeOrder];
    }

    private function updateYamatoSubsUsersOrderTablesFrom(
        $YamatoSubsUsersOrder,
        $YamatoSubsUsersOrderItems,
        $YamatoSubsUsersShippings,
        $YamatoSubsUsersReferralCodeOrder,
        $TempOrder,
        $TempOrderItems,
        $TempShippings,
        $TempReferralCodeOrder
    ) {
        $YamatoSubsUsersOrder = $this->yamatoSubsUsersOrderRepository->updateByNewOrder($YamatoSubsUsersOrder, $TempOrder);
        $YamatoSubsUsersOrderItems = $this->yamatoSubsUsersOrderItemRepository->updateByNewOrderItems($YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems, $YamatoSubsUsersShippings, $TempOrderItems, $TempShippings);
        $YamatoSubsUsersReferralCodeOrder = $this->yamatoSubsUsersReferralCodeOrderRepository->updateByNewReferralCodeOrder($YamatoSubsUsersReferralCodeOrder, $TempReferralCodeOrder);
        return [$YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems, $YamatoSubsUsersReferralCodeOrder];
    }

    private function removeTempOrderTables($TempOrder, $TempReferralCodeOrder) {
        $this->entityManager->remove($TempOrder); // remove with shippings, order_items
        if ($TempReferralCodeOrder) {
            $this->entityManager->remove($TempReferralCodeOrder);
        }
        $this->entityManager->flush();
    }
}
