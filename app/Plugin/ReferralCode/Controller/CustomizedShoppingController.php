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

namespace Plugin\ReferralCode\Controller;

use Eccube\Controller\ShoppingController;
use Eccube\Entity\Order;
use Eccube\Form\Type\Shopping\OrderType;
use Eccube\Repository\DeliveryRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Service\CartService;
use Eccube\Service\MailService;
use Eccube\Service\OrderHelper;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\NotBlank;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Repository\ReferralCodeUserRepository;
use Plugin\ReferralCode\Repository\ReferralCodeDeliveryConfigRepository;
use Plugin\ReferralCode\Service\ReferralCodeService;

class CustomizedShoppingController extends ShoppingController
{
    /**
     * @var SessionInterface
     */
    protected $session;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    /**
     * @var DeliveryRepository
     */
    protected $deliveryRepository;

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    /**
     * @var ReferralCodeUserRepository
     */
    protected $referralCodeUserRepository;

    /**
     * @var ReferralCodeDeliveryConfigRepository
     */
    protected $referralCodeDeliveryConfigRepository;

    /**
     * constructor.
     */
    public function __construct(
        SessionInterface $session,
        ReferralCodeService $referralCodeService,
        DeliveryRepository $deliveryRepository,
        ReferralCodeRepository $referralCodeRepository,
        ReferralCodeUserRepository $referralCodeUserRepository,
        ReferralCodeDeliveryConfigRepository $referralCodeDeliveryConfigRepository,
        CartService $cartService,
        MailService $mailService,
        OrderRepository $orderRepository,
        OrderHelper $orderHelper
    ) {
        $this->session = $session;
        $this->referralCodeService = $referralCodeService;
        $this->deliveryRepository = $deliveryRepository;
        $this->referralCodeRepository = $referralCodeRepository;
        $this->referralCodeUserRepository = $referralCodeUserRepository;
        $this->referralCodeDeliveryConfigRepository = $referralCodeDeliveryConfigRepository;
        parent::__construct($cartService, $mailService, $orderRepository, $orderHelper);
    }

    /**
     * 注文手続き画面を表示する
     *
     * 未ログインまたはRememberMeログインの場合はログイン画面に遷移させる.
     * ただし、非会員でお客様情報を入力済の場合は遷移させない.
     *
     * カート情報から受注データを生成し, `pre_order_id`でカートと受注の紐付けを行う.
     * 既に受注が生成されている場合(pre_order_idで取得できる場合)は, 受注の生成を行わずに画面を表示する.
     *
     * purchaseFlowの集計処理実行後, warningがある場合はカートど同期をとるため, カートのPurchaseFlowを実行する.
     *
     * @Route("/shopping", name="shopping")
     * @Template("Shopping/index.twig")
     */
    public function index(PurchaseFlow $cartPurchaseFlow)
    {
        log_info(__CLASS__.'#'.__FUNCTION__.' start');

        // ログイン状態のチェック.
        if ($this->orderHelper->isLoginRequired()) {
            log_info('[注文手続] 未ログインもしくはRememberMeログインのため, ログイン画面に遷移します.');

            return $this->redirectToRoute('shopping_login');
        }

        // カートチェック.
        $Cart = $this->cartService->getCart();
        if (!($Cart && $this->orderHelper->verifyCart($Cart))) {
            log_info('[注文手続] カートが購入フローへ遷移できない状態のため, カート画面に遷移します.');

            return $this->redirectToRoute('cart');
        }

        // 受注の初期化.
        log_info('[注文手続] 受注の初期化処理を開始します.');
        $Customer = $this->getUser() ? $this->getUser() : $this->orderHelper->getNonMember();
        $Order = $this->orderHelper->initializeOrder($Cart, $Customer);

        // 集計処理.
        log_info('[注文手続] 集計処理を開始します.', [$Order->getId()]);
        $flowResult = $this->executePurchaseFlow($Order, false);
        $this->entityManager->flush();

        if ($flowResult->hasError()) {
            log_info('[注文手続] Errorが発生したため購入エラー画面へ遷移します.', [$flowResult->getErrors()]);

            return $this->redirectToRoute('shopping_error');
        }

        if ($flowResult->hasWarning()) {
            log_info('[注文手続] Warningが発生しました.', [$flowResult->getWarning()]);

            // 受注明細と同期をとるため, CartPurchaseFlowを実行する
            $cartPurchaseFlow->validate($Cart, new PurchaseContext());
            $this->cartService->save();
        }

        // マイページで会員情報が更新されていれば, Orderの注文者情報も更新する.
        if ($Customer->getId()) {
            $this->orderHelper->updateCustomerInfo($Order, $Customer);
            $this->entityManager->flush();
        }

        $form = $this->createForm(OrderType::class, $Order);

        /* ここからカスタマイズ */
        $ShippingsForm = $form->get('Shippings');
        $isReferralCodeUsingOrder = $this->isReferralCodeUsingOrder($Order);
        foreach($ShippingsForm as $ShippingForm) {
            $Shipping = $ShippingForm->getData();
            $Deliveries = $this->searchDeliveriesFrom($Shipping, $isReferralCodeUsingOrder);
            $Shipping->setDelivery($ShippingForm->get('Delivery')->getData());
            $this->entityManager->persist($Shipping);
            $this->entityManager->flush($Shipping);

            $ShippingForm->remove('Delivery');
            $ShippingForm->add(
                'Delivery',
                EntityType::class,
                [
                    'required' => false,
                    'label' => 'shipping.label.delivery_hour',
                    'class' => 'Eccube\Entity\Delivery',
                    'choice_label' => 'name',
                    'choices' => $Deliveries,
                    'placeholder' => false,
                    'constraints' => [
                        new NotBlank(),
                    ],
                ]
            );
        }

        // 紹介コードが個別で入っていないか確認
        $UserAssociatedReferralCode = null;
        if ($this->session->get('referral_code')) {
            $UserAssociatedReferralCode = $this->referralCodeRepository->findActiveReferralCode($this->session->get('referral_code'));
        }
        elseif ($this->isGranted('ROLE_USER')) {
            $UserAssociatedReferralCode = $this->referralCodeUserRepository->findActiveReferralCode($Customer->getId());
        }

        if ($isReferralCodeUsingOrder) {
            $this->saveReferralCodeOrder($Order, $Customer);
        }
        elseif($UserAssociatedReferralCode) {
            // 対象商品がないが、紹介コードが入力されている場合
            $this->saveReferralCodeOrderNotItem($Order, $Customer, $UserAssociatedReferralCode);
        }

        // 再度、集計処理.
        log_info('[注文手続] 集計処理を開始します.', [$Order->getId()]);
        $flowResult = $this->executePurchaseFlow($Order, false);
        $this->entityManager->flush();

        if ($flowResult->hasError()) {
            log_info('[注文手続] Errorが発生したため購入エラー画面へ遷移します.', [$flowResult->getErrors()]);

            return $this->redirectToRoute('shopping_error');
        }
        /* ここまでカスタマイズ */

        log_info(__CLASS__.'#'.__FUNCTION__.' end');
        return [
            'form' => $form->createView(),
            'Order' => $Order,
        ];
    }

    /**
     * 紹介コード利用受注かどうか判定
     * ※ このタイミングで、セッションに入っているreferral_codeが正しいものの場合
     * ユーザーを登録しておく事で、以降の処理はユーザーが紹介コード利用ユーザーかどうかを判定できる。
     *
     * @return 紹介コード利用受注の場合true、それ以外false
     */
    private function isReferralCodeUsingOrder(Order $Order) {
        if ($this->isGranted('ROLE_USER')) {
            $Customer = $this->getUser();
            $ReferralCode = $this->referralCodeUserRepository->findActiveReferralCode($Customer->getId());
            if ($ReferralCode) {
                $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                if (sizeof($referralCodeProducts) > 0) {
                    return true;
                }
            }
            if ($this->session->has('referral_code')) {
                $referral_code = $this->session->get('referral_code');
                $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($referral_code);
                if ($ReferralCode) {
                    $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                    if (sizeof($referralCodeProducts) > 0) {
                        $this->referralCodeService->saveReferralCodeUser($Customer->getId(), $referral_code);
                        return true;
                    }
                }
            }
        } else {
            $referral_code = $this->session->get('referral_code');
            if(!empty($referral_code)) {
                $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($referral_code);
                if ($ReferralCode) {
                    $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                    if (sizeof($referralCodeProducts) > 0) {
                        return true;
                    }
                }
            }
        }

        return false;
    }

    /**
     * （紹介コード受注かどうかで変わる）配送業者を取得
     * 
     * @param Shipping $Shipping          お届け先情報
     * @param boolean $isReferralCodeUsingOrder 紹介コード利用受注かどうか
     *
     * @return array 配送業者のリスト
     *
     * @throws \Exception 対応する配送先が0の場合、システムエラーとする（エラーログには詳細を記載）
     */
    private function searchDeliveriesFrom($Shipping, $isReferralCodeUsingOrder) {
        if (is_null($Shipping) || !$Shipping->getId()) {
            return [];
        }

        // 配送商品に含まれる販売種別を抽出.
        $OrderItems = $Shipping->getProductOrderItems();
        $SaleTypes = [];
        foreach ($OrderItems as $OrderItem) {
            $ProductClass = $OrderItem->getProductClass();
            $SaleType = $ProductClass->getSaleType();
            $SaleTypes[$SaleType->getId()] = $SaleType;
        }

        // 販売種別に紐づく配送業者を一旦取得.
        $Deliveries = $this->deliveryRepository->getDeliveries($SaleTypes);

        // 配送設定で許可されている配送業者のみを抽出
        $ReferralCodeDeliveryConfigs = $isReferralCodeUsingOrder
            ? $this->referralCodeDeliveryConfigRepository->findBy(['referral_code_order_flg' => true])
            : $this->referralCodeDeliveryConfigRepository->findBy(['normal_order_flg' => true]);

        $Deliveries = array_filter(
            $Deliveries,
            function($d, $index) use ($ReferralCodeDeliveryConfigs) {
                return count(array_filter(
                    $ReferralCodeDeliveryConfigs,
                    function($rcdc, $i) use ($d) {
                        return $rcdc->getDelivery()->getId() === $d->getId();
                    },
                    ARRAY_FILTER_USE_BOTH
                )) > 0;
            },
            ARRAY_FILTER_USE_BOTH
        );

        if (empty($Deliveries)) {
            throw new \Exception('[運用エラー] 紹介コードプラグインの設定画面で配送業者を許可していません。 配送業者を1件以上許可してください。');
        }

        return $Deliveries;
    }

    /**
     * ReferralCodeOrderを計算して保存する.
     *
     * @param Order $Order
     * @param Customer $Customer
     *
     * @return ReferralCodeOrder $ReferralCodeOrder
     */
    private function saveReferralCodeOrder($Order, $Customer) {
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());
        if ($this->isGranted('ROLE_USER')) {
            $ReferralCode = $this->referralCodeUserRepository->findActiveReferralCode($Customer->getId());
            if (!is_null($ReferralCode)) {
                $ReferralCodeOrder = $this->applyReferralCode($Customer, $Order, $ReferralCode->getReferralCode());
            }
        } else {
            $referral_code = $this->session->get('referral_code');
            $ReferralCodeOrder = $this->applyReferralCode($Customer, $Order, $referral_code);
        }
        return $ReferralCodeOrder;
    }

    /**
     * 紹介コードはあるが、対象商品が注文にない場合のReferralCodeOrderを保存する.
     *
     * @param Order $Order
     * @param Customer $Customer
     * @param ReferralCode $ReferralCode
     *
     * @return boolean false
     */
    private function saveReferralCodeOrderNotItem($Order, $Customer, $ReferralCode) {
        if(is_null($ReferralCode)) {
            return false;
        }
        $this->referralCodeService->saveReferralCodeOrder($Order, $ReferralCode, $ReferralCode->getReferralCode(), $Customer, 0);
        return true;
    }

    /**
     * 紹介コードを適用する.
     *
     * @param Customer $Customer
     * @param Order $Order
     * @param string $referral_code
     *
     * @return ReferralCodeOrder $ReferralCodeOrder
     */
    private function applyReferralCode($Customer, $Order, $referral_code)
    {
        $ReferralCodeOrder = null;
        $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($referral_code);
        if( !is_null($ReferralCode) ) {
            // 対象紹介コードが存在しているかチェック
            $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
            if (sizeof($referralCodeProducts) > 0) {
                // 値引き額を取得
                $discount = $this->referralCodeService->recalcOrder($Order, $ReferralCode, $referralCodeProducts);

                $Order->setDiscount($Order->getDiscount() + $discount);
                $total = $Order->getTotal() - $discount;
                $Order->setTotal($total);
                $Order->setPaymentTotal($total);
                // 紹介コード受注情報を保存する
                $this->referralCodeService->saveReferralCodeOrder($Order, $ReferralCode, $referral_code, $Customer, $discount);
                // 合計、値引きを再計算し、dtb_orderを更新する
                $this->entityManager->persist($Order);
                $this->entityManager->flush($Order);

                // 再度、紹介コードを取得
                $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());
            }
        }

        return $ReferralCodeOrder;
    }
}
