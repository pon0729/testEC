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

use Eccube\Controller\CartController;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\ProductClass;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\ProductClassRepository;
use Eccube\Service\CartService;
use Eccube\Service\OrderHelper;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\PurchaseFlow;
use Eccube\Service\PurchaseFlow\PurchaseFlowResult;
use Plugin\ReferralCode\Repository\ReferralCodeConfigRepository;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Repository\ReferralCodeUserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CustomizedCartController extends CartController
{
    /**
     * @var ProductClassRepository
     */
    protected $productClassRepository;

    /**
     * @var CartService
     */
    protected $cartService;

    /**
     * @var PurchaseFlow
     */
    protected $purchaseFlow;

    /**
     * @var BaseInfo
     */
    protected $baseInfo;

    /**
     * @var ReferralCodeConfigRepository
     */
    protected $referralCodeConfigRepository;

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    /**
     * @var ReferralCodeUserRepository
     */
    protected $referralCodeUserRepository;

    /**
     * CartController constructor.
     *
     * @param ProductClassRepository $productClassRepository
     * @param CartService $cartService
     * @param PurchaseFlow $cartPurchaseFlow
     * @param BaseInfoRepository $baseInfoRepository
     * @param ReferralCodeConfigRepository $referralCodeConfigRepository
     * @param ReferralCodeRepository $referralCodeRepository
     * @param ReferralCodeUserRepository $referralCodeUserRepository
     */
    public function __construct(
        ProductClassRepository $productClassRepository,
        CartService $cartService,
        PurchaseFlow $cartPurchaseFlow,
        BaseInfoRepository $baseInfoRepository,
        ReferralCodeConfigRepository $referralCodeConfigRepository,
        ReferralCodeRepository $referralCodeRepository,
        ReferralCodeUserRepository $referralCodeUserRepository
    ) {
        $this->productClassRepository = $productClassRepository;
        $this->cartService = $cartService;
        $this->purchaseFlow = $cartPurchaseFlow;
        $this->baseInfo = $baseInfoRepository->get();
        $this->referralCodeConfigRepository = $referralCodeConfigRepository;
        $this->referralCodeRepository = $referralCodeRepository;
        $this->referralCodeUserRepository = $referralCodeUserRepository;
    }

    /**
     * カート画面.
     *
     * @Route("/cart", name="cart")
     * @Template("Cart/index.twig")
     */
    public function index(Request $request)
    {
        log_info(__CLASS__.'#'.__FUNCTION__.' start');

        $session = $request->getSession();

        // カートを取得して明細の正規化を実行
        $Carts = $this->cartService->getCarts();
        $this->execPurchaseFlow($Carts);

        // TODO itemHolderから取得できるように
        $least = [];
        $quantity = [];
        $isDeliveryFree = [];
        $totalPrice = 0;
        $totalQuantity = 0;

        foreach ($Carts as $Cart) {
            $quantity[$Cart->getCartKey()] = 0;
            $isDeliveryFree[$Cart->getCartKey()] = false;

            if ($this->baseInfo->getDeliveryFreeQuantity()) {
                if ($this->baseInfo->getDeliveryFreeQuantity() > $Cart->getQuantity()) {
                    $quantity[$Cart->getCartKey()] = $this->baseInfo->getDeliveryFreeQuantity() - $Cart->getQuantity();
                } else {
                    $isDeliveryFree[$Cart->getCartKey()] = true;
                }
            }

            /**
             * 既にユーザーに紐づいている紹介コード
             * もしくは セッションにある紹介コードに紐づく有効な紹介コード
             * が存在する場合、送料無料の条件を紹介コードプラグイン設定画面の送料無料条件に変更
             */
            $ReferralCode = null;
            if ($this->isGranted('ROLE_USER')) {
                $ReferralCode = $this->referralCodeUserRepository->findActiveReferralCode($this->getUser()->getId());
            } else {
                $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($session->get('referral_code'));
            }

            if ($this->baseInfo->getDeliveryFreeAmount()) {
                $delivery_free_amount = $this->baseInfo->getDeliveryFreeAmount();

                if (!is_null($ReferralCode)) {
                    $referral_code_side_delivery_free_amount = $this->referralCodeConfigRepository->getDeliveryFreeAmount(
                        $default_value = $delivery_free_amount
                    );
                    if ($referral_code_side_delivery_free_amount) {
                        $delivery_free_amount = intval($referral_code_side_delivery_free_amount, 10);
                    }
                }

                if (!$isDeliveryFree[$Cart->getCartKey()] && $delivery_free_amount <= $Cart->getTotalPrice()) {
                    $isDeliveryFree[$Cart->getCartKey()] = true;
                } else {
                    $least[$Cart->getCartKey()] = $delivery_free_amount - $Cart->getTotalPrice();
                }
            }

            $totalPrice += $Cart->getTotalPrice();
            $totalQuantity += $Cart->getQuantity();
        }

        // カートが分割された時のセッション情報を削除
        $session->remove(OrderHelper::SESSION_CART_DIVIDE_FLAG);

        log_info(__CLASS__.'#'.__FUNCTION__.' end');
        return [
            'totalPrice' => $totalPrice,
            'totalQuantity' => $totalQuantity,
            // 空のカートを削除し取得し直す
            'Carts' => $this->cartService->getCarts(true),
            'least' => $least,
            'quantity' => $quantity,
            'is_delivery_free' => $isDeliveryFree,
        ];
    }
}
