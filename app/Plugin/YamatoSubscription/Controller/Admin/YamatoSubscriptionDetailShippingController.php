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
use Eccube\Form\Type\Admin\SearchProductType;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\DeliveryRepository;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Eccube\Service\TaxRuleService;
use Plugin\YamatoSubscription\Form\Type\Admin\YamatoSubsUsersShippingType;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderItemRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersShippingRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class YamatoSubscriptionDetailShippingController extends AbstractController
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
     * @var TaxRuleService
     */
    protected $taxRuleService;

    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var DeliveryRepository
     */
    protected $deliveryRepository;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

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

    public function __construct(
        SerializerInterface $serializer,
        PurchaseFlow $orderPurchaseFlow,
        TaxRuleService $taxRuleService,
        CategoryRepository $categoryRepository,
        DeliveryRepository $deliveryRepository,
        YamatoSubsRepository $yamatoSubsRepository,
        YamatoSubsUsersOrderRepository $yamatoSubsUsersOrderRepository,
        YamatoSubsUsersOrderItemRepository $yamatoSubsUsersOrderItemRepository,
        YamatoSubsUsersShippingRepository $yamatoSubsUsersShippingRepository
    ) {
        $this->serializer = $serializer;
        $this->purchaseFlow = $orderPurchaseFlow;
        $this->taxRuleService = $taxRuleService;
        $this->categoryRepository = $categoryRepository;
        $this->deliveryRepository = $deliveryRepository;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsUsersOrderRepository = $yamatoSubsUsersOrderRepository;
        $this->yamatoSubsUsersOrderItemRepository = $yamatoSubsUsersOrderItemRepository;
        $this->yamatoSubsUsersShippingRepository = $yamatoSubsUsersShippingRepository;
    }



    /**
     * 定期配送 出荷情報編集画面
     * @Route("/%eccube_admin_route%/plugin/yamatosubscription/detail/{id}/shipping/edit", requirements={"id" = "\d+"}, name="plugin_yamato_subscription_admin_detail_shipping_edit", methods={"GET", "POST"})
     * @Template("@YamatoSubscription/admin/Detail/ChangeContents/shipping.twig")
     *
     * @param Request $request
     * @param int $id
     *
     * @return array
     */
    public function index(Request $request, int $id) {
        $YamatoSubs = $this->yamatoSubsRepository->findOneBy(['visible' => true, 'id' => $id, 'cancelled_date' => null]);
        if (empty($YamatoSubs)) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }
        $YamatoSubsUsersOrder = $this->yamatoSubsUsersOrderRepository->findOrderBy($YamatoSubs);
        if (!$YamatoSubsUsersOrder) {
            throw new NotFoundHttpException(trans('yamatosubscription.error.badrequest'));
        }

        $YamatoSubsUsersOrderItems =
            $this->yamatoSubsUsersOrderItemRepository->findOrderItemsBy($YamatoSubsUsersOrder);
        $YamatoSubsUsersShippings =
            $this->yamatoSubsUsersShippingRepository->findShippingsBy($YamatoSubsUsersOrder);

        // 編集前の受注情報を保持
        $OriginYamatoSubsUsersShippings = new ArrayCollection();
        $OriginYamatoSubsUsersOrderItems = [];

        foreach ($YamatoSubsUsersShippings as $key => $YamatoSubsUsersShipping) {
            $OriginYamatoSubsUsersShippings->add($YamatoSubsUsersShipping);

            // 編集前のお届け先のアイテム情報を保持
            $OriginYamatoSubsUsersOrderItems[$key] = new ArrayCollection();

            foreach ($YamatoSubsUsersShipping->getYamatoSubsUsersOrderItems() as $YamatoSubsUsersOrderItem) {
                $OriginYamatoSubsUsersOrderItems[$key]->add($YamatoSubsUsersOrderItem);
            }
        }

        $builder = $this->formFactory->createBuilder();
        $builder
            ->add('YamatoSubsUsersShippings', CollectionType::class, [
                'entry_type' => YamatoSubsUsersShippingType::class,
                'data' => $YamatoSubsUsersShippings,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ]);

        // 配送先の追加フラグ
        $builder
            ->add('add_shipping', HiddenType::class, [
                'mapped' => false,
            ]);

        // 配送先の追加フラグが立っている場合は新しいお届け先を追加
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            if ($data['add_shipping']) {
                $YamatoSubsUsersShippings = $data['YamatoSubsUsersShippings'];
                $newYamatoSubsUsersShipping = ['Delivery' => $YamatoSubsUsersShippings[0]['Delivery']];
                $YamatoSubsUsersShippings[] = $newYamatoSubsUsersShipping;
                $data['YamatoSubsUsersShippings'] = $YamatoSubsUsersShippings;
                $data['add_shipping'] = '';
                $event->setData($data);
            }
        });

        $form = $builder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->getConnection()->beginTransaction();
            try {
                // 削除された項目の削除
                foreach ($OriginYamatoSubsUsersShippings as $key => $OriginYamatoSubsUsersShipping) {
                    if (!$YamatoSubsUsersShippings->contains($OriginYamatoSubsUsersShipping)) {
                        // お届け先自体が削除された場合
                        // 削除されたお届け先に紐づく明細の削除
                        foreach ($OriginYamatoSubsUsersOrderItems[$key] as $OriginYamatoSubsUsersOrderItem) {
                            $YamatoSubsUsersOrder->removeYamatoSubsUsersOrderItem($OriginYamatoSubsUsersOrderItem);
                            $YamatoSubsUsersOrderItems->removeElement($OriginYamatoSubsUsersOrderItem);
                            $this->entityManager->remove($OriginYamatoSubsUsersOrderItem);
                        }

                        // 削除されたお届け先の削除
                        $this->entityManager->remove($OriginYamatoSubsUsersShipping);
                    } else {
                        // お届け先は削除されていない場合
                        // 削除された明細の削除
                        foreach ($OriginYamatoSubsUsersOrderItems[$key] as $OriginYamatoSubsUsersOrderItem) {
                            if (!$YamatoSubsUsersShippings[$key]->getYamatoSubsUsersOrderItems()->contains($OriginYamatoSubsUsersOrderItem)) {
                                $YamatoSubsUsersOrder->removeYamatoSubsUsersOrderItem($OriginYamatoSubsUsersOrderItem);
                                $YamatoSubsUsersOrderItems->removeElement($OriginYamatoSubsUsersOrderItem);
                                $this->entityManager->remove($OriginYamatoSubsUsersOrderItem);
                            }
                        }
                    }
                }

                // 追加された項目の追加
                foreach ($YamatoSubsUsersShippings as $YamatoSubsUsersShipping) {
                    // 追加されたお届け先の追加
                    if (!$OriginYamatoSubsUsersShippings->contains($YamatoSubsUsersShipping)) {
                        $this->entityManager->persist($YamatoSubsUsersShipping);
                    }

                    // 追加された明細の追加
                    foreach ($YamatoSubsUsersShipping->getYamatoSubsUsersOrderItems() as $YamatoSubsUsersOrderItem) {
                        $YamatoSubsUsersOrderItem->setYamatoSubsUsersShipping($YamatoSubsUsersShipping);
                        if (is_null($YamatoSubsUsersOrderItem->getYamatoSubsUsersOrder())) {
                            $YamatoSubsUsersOrderItem->setYamatoSubsUsersOrder($YamatoSubsUsersOrder);
                            $YamatoSubsUsersOrder->addYamatoSubsUsersOrderItem($YamatoSubsUsersOrderItem);
                            $YamatoSubsUsersOrderItems->add($YamatoSubsUsersOrderItem);
                            $this->entityManager->persist($YamatoSubsUsersOrderItem);
                        }
                    }

                    $YamatoSubsUsersShipping->setYamatoSubsUsersOrder($YamatoSubsUsersOrder);
                }
                $this->entityManager->flush();

                // YamatoSubsUsersShippingsとShippingsで紐付けるために、連番を振り直す。。。
                $YamatoSubsUsersShippings = new ArrayCollection($YamatoSubsUsersShippings->getValues());

                [$TempOrder, $TempOrderItems, $TempShippings] =
                    $this->saveTempOrder(
                        $YamatoSubsUsersOrder,
                        $YamatoSubsUsersOrderItems,
                        $YamatoSubsUsersShippings
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

                $this->purchaseFlow->prepare($TempOrder, $purchaseContext);
                $this->purchaseFlow->commit($TempOrder, $purchaseContext);
                $this->entityManager->flush();

                [$YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems] =
                    $this->updateYamatoSubsUsersOrderTablesFrom(
                        $YamatoSubsUsersOrder,
                        $YamatoSubsUsersOrderItems,
                        $YamatoSubsUsersShippings,
                        $TempOrder,
                        $TempOrderItems,
                        $TempShippings
                    );

                // 一時的に作成した受注テーブルを全て削除
                $this->entityManager->remove($TempOrder); // remove with shippings, order_items
                $this->entityManager->flush();

                if (!$flowResult->hasError() && $request->get('mode') == 'register') {
                    log_info('start to register shippings: yamato_subs_users_order_id', [$YamatoSubsUsersOrder->getId()]);

                    $this->entityManager->getConnection()->commit();

                    $this->addInfo('yamatosubscription.admin.detail_shipping_edit.shipping_save_message', 'admin');
                    $this->addSuccess('admin.common.save_complete', 'admin');

                    log_info('end to register shippings: yamato_subs_users_order_id', [$YamatoSubsUsersOrder->getId()]);

                    return $this->redirectToRoute($request->get('_route'), ['id' => $id]);
                } elseif ($request->get('mode') == 'register' && $form->getErrors(true)) {
                    $this->addError('admin.common.save_error', 'admin');
                }

                $this->entityManager->getConnection()->rollback();
            } catch (\Exception $e) {
                log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                $this->entityManager->getConnection()->rollback();
                $this->addError('admin.common.save_error', 'admin');
                return $this->redirectToRoute($request->get('_route'), ['id' => $id]);
            }
        }

        // 商品検索フォーム
        $builder = $this->formFactory
            ->createBuilder(SearchProductType::class);

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
            'id' => $id,
            'shippingDeliveryTimes' => $this->serializer->serialize($times, 'json'),
        ];
    }



    private function saveTempOrder(
        $YamatoSubsUsersOrder,
        $YamatoSubsUsersOrderItems,
        $YamatoSubsUsersShippings
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

        return [$TempOrder, $TempOrderItems, $TempShippings];
    }

    private function updateYamatoSubsUsersOrderTablesFrom(
        $YamatoSubsUsersOrder,
        $YamatoSubsUsersOrderItems,
        $YamatoSubsUsersShippings,
        $TempOrder,
        $TempOrderItems,
        $TempShippings
    ) {
        $YamatoSubsUsersOrder = $this->yamatoSubsUsersOrderRepository->updateByNewOrder($YamatoSubsUsersOrder, $TempOrder);
        $YamatoSubsUsersOrderItems = $this->yamatoSubsUsersOrderItemRepository->updateByNewOrderItems($YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems, $YamatoSubsUsersShippings, $TempOrderItems, $TempShippings);
        return [$YamatoSubsUsersOrder, $YamatoSubsUsersOrderItems];
    }
}
