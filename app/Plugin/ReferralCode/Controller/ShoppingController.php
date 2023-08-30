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

use Eccube\Common\Constant;
use Eccube\Entity\Order;
use Eccube\Entity\Customer;
use Eccube\Controller\AbstractController;
use Eccube\Repository\OrderItemRepository;
use Eccube\Service\CartService;
use Eccube\Service\OrderHelper;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Form\Type\ReferralCodeUseType;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Class ShoppingController.
 */
class ShoppingController extends AbstractController
{
    /**
     * @var CartService
     */
    protected $cartService;

    /**
     * @var OrderHelper
     */
    protected $orderHelper;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    /**
     * @var OrderItemRepository
     */
    protected $orderItemRepository;

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    public function __construct(
        CartService $cartService,
        OrderHelper $orderHelper,
        ReferralCodeService $referralCodeService,
        OrderItemRepository $orderItemRepository,
        ReferralCodeRepository $referralCodeRepository
    ) {
        $this->cartService = $cartService;
        $this->orderHelper = $orderHelper;
        $this->referralCodeService = $referralCodeService;
        $this->orderItemRepository = $orderItemRepository;
        $this->referralCodeRepository = $referralCodeRepository;
    }

    /**
     * 紹介コード入力、登録画面.
     * @Route("/plugin/referral_code/shopping/shopping_referral_code", name="plugin_referral_code_shopping")
     * @Template("@ReferralCode/default/shopping_referral_code.twig")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function shoppingReferralCode(Request $request)
    {
        // 受注の存在チェック.
        $preOrderId = $this->cartService->getPreOrderId();
        $Order = $this->orderHelper->getPurchaseProcessingOrder($preOrderId);
        if (!$Order) {
            log_info('[リダイレクト] 購入処理中の受注が存在しません.');
            $this->addError('front.shopping.order.error');
            return $this->redirectToRoute('shopping_error');
        }

        $session = $request->getSession();

        // 紹介コードを取得する
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());
        $referral_code = is_null($ReferralCodeOrder) ? null : $ReferralCodeOrder->getReferralCode();

        // 紹介コードが未入力の場合
        if(empty($referral_code)) {
            // セッション情報に紹介コード情報があれば紹介コード情報を設定
            $referral_code = null;
            if ($session->has('referral_code')) {
                $referral_code = $session->get('referral_code');
            }

            if(! is_null($referral_code)) {
                // DBに存在するか確認
                $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($referral_code);
                // 存在するならば保存処理
                if($ReferralCode) {
                    $referral_code = $ReferralCode->getReferralCode();
                }
                // 存在しなければセッション削除
                else {
                    $session->remove('referral_code');
                }
            }
        }

        $form = $this->formFactory->createBuilder(ReferralCodeUseType::class)->getForm();
        $form->get('referral_code')->setData($referral_code);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $form_referral_code = $form->get('referral_code')->getData();
            $form_referral_code_cancel = $form->get('referral_code_use')->getData();
            // ---------------------------------
            // 紹介コード入力項目追加
            // ----------------------------------
            if ($form_referral_code_cancel == Constant::DISABLED) {
                if (!is_null($form_referral_code)) {
                    // 画面上の紹介コードが入力されておらず、既に紹介コードが登録されていれば紹介コードを無効にする
                    $this->removeReferralCodeOrder($Order);
                    $session->remove('referral_code');
                }

                return $this->redirectToRoute('shopping');
            }
            else {
                $discount = 0;
                $error = false;
                $Customer = $this->isGranted('ROLE_USER') ? $this->getUser() : $this->orderHelper->getNonMember();
                $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($form_referral_code);
                if (!$ReferralCode) {
                    $form->get('referral_code')->addError(new FormError('referral_code.shopping.error.notfound'));
                    $error = true;
                }
                if (!$error) {
                    if (!$this->isGranted('ROLE_USER') && $ReferralCode->getReferralCodeMember()) {
                        $form->get('referral_code')->addError(new FormError('referral_code.shopping.error.member'));
                        $error = true;
                    }
                }
                if (!$error) {
                    $lowerLimit = $ReferralCode->getReferralCodeLowerLimit();
                    // 既に登録済みの紹介コードを一旦削除
                    $this->removeReferralCodeOrder($Order);
                    // 対象紹介コードが存在しているかチェック
                    $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                    $checkLowerLimit = $this->referralCodeService->isLowerLimitReferralCode($referralCodeProducts, $lowerLimit);
                    // 値引き額を取得
                    $discount = $this->referralCodeService->recalcOrder($Order, $ReferralCode, $referralCodeProducts);

                    $existReferralCode = sizeof($referralCodeProducts) > 0;
                    // 商品関係なく、存在する紹介コードであれば登録可能とみなす
                    /*
                    if (!$existReferralCode) {
                        $form->get('referral_code')->addError(new FormError('referral_code.shopping.error.notfound'));
                        $error = true;
                    }
                    */

                    if (!$checkLowerLimit && $existReferralCode) {
                        $message = trans('referral_code.shopping.error.lowerlimit', ['%lowerLimit%' => number_format($lowerLimit)]);
                        $form->get('referral_code')->addError(new FormError($message));
                        $error = true;
                    }

                    // 紹介コードが既に利用されているかチェック
                    // -> 何度も利用できるように対応
                    // $referralCodeUsedOrNot = $this->referralCodeService->checkReferralCodeUsedOrNot($form_referral_code, $Customer);
                    // if ($referralCodeUsedOrNot && $existReferralCode) {
                    //     // 既に存在している
                    //     $form->get('referral_code')->addError(new FormError('referral_code.shopping.error.sameuser'));
                    //     $error = true;
                    // }

                    // 紹介コードの発行枚数チェック
                    $isReferralCodeUseTimeRemaining = $this->referralCodeService->isReferralCodeUseTimeRemaining($form_referral_code);
                    if (!$isReferralCodeUseTimeRemaining && $existReferralCode) {
                        $form->get('referral_code')->addError(new FormError('referral_code.shopping.error.referral_code_use_time'));
                        $error = true;
                    }

                    // 合計金額より値引き額の方が高いかチェック
                    if ($Order->getSubTotal() < $discount && $existReferralCode) {
                        $form->get('referral_code')->addError(new FormError('referral_code.shopping.error.minus'));
                        $error = true;
                    }
                }

                // ----------------------------------
                // 値引き項目追加 / 合計金額上書き
                // ----------------------------------
                if (!$error) {
                    // 紹介コード情報を登録
                    $this->setReferralCodeOrder($Order, $ReferralCode, $form_referral_code, $Customer, $discount);

                    // セッションに紹介コードを残す（ゲスト購入の場合に対応）
                    if (!$this->isGranted('ROLE_USER')) {
                        $session->set("referral_code", $form_referral_code);
                    }

                    // もし紹介コードとユーザーが紐づいていない場合は、紐づける（以降はその紹介コードを自動でセット）
                    if ($this->isGranted('ROLE_USER')) {
                        $this->referralCodeService->saveReferralCodeUser($Customer->getId(), $form_referral_code);
                    }

                    return $this->redirectToRoute('shopping');
                } else {
                    // エラーが発生した場合、前回設定されている紹介コードがあればその金額を再設定する
                    if ($referral_code) {
                        // 紹介コード情報を取得
                        $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($referral_code);
                        if ($ReferralCode) {
                            $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                            // 値引き額を取得
                            $discount = $this->referralCodeService->recalcOrder($Order, $ReferralCode, $referralCodeProducts);
                            // 紹介コード情報を登録
                            $this->setReferralCodeOrder($Order, $ReferralCode, $referral_code, $Customer, $discount);
                        }
                    }
                }
            }
        }

        return [
            'form' => $form->createView(),
            'Order' => $Order,
        ];
    }

    /**
     * 紹介コード情報に登録.
     *
     * @param Order       $Order
     * @param ReferralCode      $ReferralCode
     * @param string      $referral_code
     * @param Customer    $Customer
     * @param int         $discount
     */
    private function setReferralCodeOrder(Order $Order, ReferralCode $ReferralCode, $referral_code, Customer $Customer, $discount)
    {
        $total = $Order->getTotal() - $discount;
        $Order->setDiscount($Order->getDiscount() + $discount);
        $Order->setTotal($total);
        $Order->setPaymentTotal($total);
        // 紹介コード受注情報を保存する
        $this->referralCodeService->saveReferralCodeOrder($Order, $ReferralCode, $referral_code, $Customer, $discount);
        // 合計、値引きを再計算し、dtb_orderを更新する
        $this->entityManager->persist($Order);
        $this->entityManager->flush($Order);
    }

    /**
     * 紹介コードが未入力または、紹介コードを登録後に再度別の紹介コードが設定された場合、
     * 既存の紹介コードを情報削除.
     *
     * @param Order $Order
     */
    private function removeReferralCodeOrder(Order $Order)
    {
        // 紹介コードが未入力で紹介コード情報が存在すれば紹介コード情報を削除
        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());
        if ($ReferralCodeOrder) {
            $OrderItems = $this->orderItemRepository->findBy(['processor_name' => ReferralCodeProcessor::class, 'Order' => $Order]);
            foreach ($OrderItems as $OrderItem) {
                $Order->removeOrderItem($OrderItem);
                $this->entityManager->remove($OrderItem);
                $this->entityManager->flush($OrderItem);
            }

            $this->entityManager->remove($ReferralCodeOrder);
            $this->entityManager->flush($ReferralCodeOrder);
            $this->entityManager->persist($Order);
            $this->entityManager->flush($Order);

            if ( $this->isGranted('ROLE_USER') && $this->referralCodeService->isReferralCodeAssociatedWith($this->getUser()->getId()) ) {
                $this->referralCodeService->removeReferralCodeUser($this->getUser()->getId());
            }
        }
    }
}
