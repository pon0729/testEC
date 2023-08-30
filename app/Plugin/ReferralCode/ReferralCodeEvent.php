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

namespace Plugin\ReferralCode;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\EccubeConfig;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Eccube\Repository\OrderRepository;
use Eccube\Service\OrderHelper;
use Plugin\ReferralCode\Entity\ReferralCode;
use Plugin\ReferralCode\Repository\ReferralCodeRepository;
use Plugin\ReferralCode\Repository\ReferralCodeConfigRepository;
use Plugin\ReferralCode\Repository\ReferralCodeUserRepository;
use Plugin\ReferralCode\Repository\ReferralCodeOrderRepository;
use Plugin\ReferralCode\Service\PurchaseFlowExecutionService;
use Plugin\ReferralCode\Service\ReferralCodeService;
use Plugin\ReferralCode\Service\PurchaseFlow\Processor\ReferralCodeProcessor;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class ReferralCodeEvent.
 */
class ReferralCodeEvent implements EventSubscriberInterface
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var SessionInterface
     */
    protected $session;

    /**
     * @var AuthorizationCheckerInterface
     */
    protected $authorizationChecker;

    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * @var OrderHelper
     */
    protected $orderHelper;

    /**
     * @var PurchaseFlowExecutionService
     */
    protected $purchaseFlowExecutionService;

    /**
     * @var ReferralCodeService
     */
    protected $referralCodeService;

    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @var ReferralCodeRepository
     */
    protected $referralCodeRepository;

    /**
     * @var ReferralCodeConfigRepository
     */
    protected $referralCodeConfigRepository;

    /**
     * @var ReferralCodeUserRepository
     */
    protected $referralCodeUserRepository;

    /**
     * @var ReferralCodeOrderRepository
     */
    protected $referralCodeOrderRepository;

    public function __construct(
        EccubeConfig $eccubeConfig,
        RequestStack $requestStack,
        SessionInterface $session,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        OrderHelper $orderHelper,
        PurchaseFlowExecutionService $purchaseFlowExecutionService,
        ReferralCodeService $referralCodeService,
        EntityManagerInterface $entityManager,
        OrderRepository $orderRepository,
        ReferralCodeRepository $referralCodeRepository,
        ReferralCodeConfigRepository $referralCodeConfigRepository,
        ReferralCodeOrderRepository $referralCodeOrderRepository,
        ReferralCodeUserRepository $referralCodeUserRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->requestStack = $requestStack;
        $this->session = $session;
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage = $tokenStorage;
        $this->orderHelper = $orderHelper;
        $this->purchaseFlowExecutionService = $purchaseFlowExecutionService;
        $this->referralCodeService = $referralCodeService;
        $this->entityManager = $entityManager;
        $this->orderRepository = $orderRepository;
        $this->referralCodeRepository = $referralCodeRepository;
        $this->referralCodeConfigRepository = $referralCodeConfigRepository;
        $this->referralCodeOrderRepository = $referralCodeOrderRepository;
        $this->referralCodeUserRepository = $referralCodeUserRepository;
    }

    /**
     * 各種イベントを登録
     */
    public static function getSubscribedEvents()
    {
        return [
            'index.twig' => ['onTopIndexTwig'],
            EccubeEvents::FRONT_ENTRY_INDEX_COMPLETE => ['onEntryIndexComplete'],
            'Shopping/index.twig' => ['onShoppingIndexTwig', /* 純正のCouponプラグインより先に表示 */ 1],
            'Shopping/confirm.twig' => ['onShoppingConfirmTwig', /* 純正のCouponプラグインより先に表示 */ 1],
            EccubeEvents::FRONT_SHOPPING_COMPLETE_INITIALIZE => ['onShoppingCompleteInitialize'],
            'Mypage/history.twig' => ['onMypageHistoryTwig', /* 純正のCouponプラグインより先に表示 */ 1],
            '@admin/Order/edit.twig' => ['onAdminOrderEditTwig'],
            EccubeEvents::MAIL_ORDER => ['onMailOrder'],
            EccubeEvents::MAIL_ADMIN_ORDER => ['onAdminMailOrder'],
        ];
    }

    /**
     * トップページで紹介コード付きのURLの場合、セッションに保存する
     *
     * @param TemplateEvent
     */
    public function onTopIndexTwig(TemplateEvent $templateEvent)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $request = $this->requestStack->getCurrentRequest();

        $referral_code = $request->query->get('referral_code');
        if (is_null($referral_code)) {
            return;
        }

        // セッション情報の書き込み
        $this->session->set("referral_code", $referral_code);

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * アカウント新規登録時に、セッションに紹介コードがある場合DBに保存
     *
     * @param TemplateEvent
     */
    public function onEntryIndexComplete(EventArgs $eventArgs)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        if (!$this->session->has("referral_code")) {
            return;
        }

        $referral_code = $this->session->get("referral_code");
        $this->session->remove("referral_code");
        $Customer = $eventArgs->getArgument('Customer');

        $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($referral_code);
        if (!is_null($ReferralCode)) {
            $this->referralCodeService->saveReferralCodeUser($Customer->getId(), $referral_code);
        }

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * 購入画面に紹介コードを追加
     *
     * @param TemplateEvent
     */
    public function onShoppingIndexTwig(TemplateEvent $templateEvent)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $request = $this->requestStack->getCurrentRequest();

        // 受注情報、顧客情報、紹介コード受注を取得
        $parameters = $templateEvent->getParameters();
        if (is_null($parameters['Order'])) {
            return;
        }
        $Order = $parameters['Order'];

        $Customer = $this->authorizationChecker->isGranted('ROLE_USER')
            ? $this->tokenStorage->getToken()->getUser()
            : $this->orderHelper->getNonMember();

        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());

        $referral_code_is_fixed =
            $this->authorizationChecker->isGranted('ROLE_USER') &&
            $this->referralCodeUserRepository->isReferralCodeAssociatedWith($Customer->getId());
        // 紹介コード適用商品はないが、紹介コードは紐づけられている場合の紹介コード利用
        $user_associated_referral_code = null;
        if ($ReferralCodeOrder && $referral_code_is_fixed) {
            $user_associated_referral_code = $this->referralCodeUserRepository->findActiveReferralCode($Customer->getId())->getReferralCode();
        } elseif($this->session->get('referral_code')) {
            $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($this->session->get('referral_code'));
            if ($ReferralCode) {
                $user_associated_referral_code = $ReferralCode->getReferralCode();
            }
        }

        /** 
         * 定期購入の場合、定期購入用の割引率を再設定
         * （元の割引率が0%でも定期購入用の割引率にする）
         */
        if ($ReferralCodeOrder) {
            // 定期購入での紹介コード割引の場合、定期購入用の割引率にする
            $ReferralCode = $this->referralCodeRepository->findActiveReferralCode($ReferralCodeOrder->getReferralCode());
            if ($ReferralCode && $ReferralCode->getDiscountType() === ReferralCode::DISCOUNT_RATE) {
                if ($request->request->get('subscription_flg') === '1' || $this->session->get($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG'])) {
                    // 紹介コードの割引率を変更
                    $original_discount_rate = $ReferralCode->getDiscountRate();
                    $subscription_discount_rate = $this->referralCodeConfigRepository->getSubscriptionDiscountRate($this->eccubeConfig['SUBSCRIPTION_DISCOUNT_RATE_DEFAULT']);

                    $ReferralCode->setDiscountRate($subscription_discount_rate);
                    $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                    $discount = $this->referralCodeService->recalcOrder($Order, $ReferralCode, $referralCodeProducts);
                    $ReferralCodeOrder->setDiscount($discount);
                    $this->entityManager->flush($ReferralCodeOrder);
                    $ReferralCode->setDiscountRate($original_discount_rate); // 一時的に変更していた割引率を元に戻す（変更するのはplg_referral_code_orderのみ）
 
                    log_info('[注文手続] 定期購入の割引率に変更のため、集計処理を開始します.', [$Order->getId()]);
                    $this->purchaseFlowExecutionService->executePurchaseFlow($Order);
                    $this->entityManager->flush();
                } else {
                    $referralCodeProducts = $this->referralCodeService->existsReferralCodeProduct($ReferralCode, $Order);
                    $discount = $this->referralCodeService->recalcOrder($Order, $ReferralCode, $referralCodeProducts);
                    $ReferralCodeOrder->setDiscount($discount);
                    $this->entityManager->flush($ReferralCodeOrder);
 
                    log_info('[注文手続] 通常購入の集計処理を開始します.', [$Order->getId()]);
                    $this->purchaseFlowExecutionService->executePurchaseFlow($Order);
                    $this->entityManager->flush();
                }
            }
        }
 
        $parameters['ReferralCodeOrder'] = $ReferralCodeOrder;
        $parameters['referral_code_is_fixed'] = $referral_code_is_fixed;
        $parameters['user_associated_referral_code'] = $user_associated_referral_code;
        $templateEvent->setParameters($parameters);
        $templateEvent->addSnippet('@ReferralCode/default/referral_code_shopping_item.twig');

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * 購入確認画面に紹介コードを追加
     *
     * @param TemplateEvent
     */
    public function onShoppingConfirmTwig(TemplateEvent $templateEvent)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $parameters = $templateEvent->getParameters();
        $Order = $parameters['Order'];
        if (is_null($Order)) {
            return;
        }

        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());
        if (is_null($ReferralCodeOrder)) {
            return;
        }

        $parameters['ReferralCodeOrder'] = $ReferralCodeOrder;
        $templateEvent->setParameters($parameters);
        $templateEvent->addSnippet('@ReferralCode/default/referral_code_shopping_item_confirm.twig');

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * 購入完了時、セッションにreferral_codeが残っていたら削除
     *
     * @param EventArgs
     */
    public function onShoppingCompleteInitialize(EventArgs $eventArgs)
    {
        if ($this->session->has("referral_code")) {
            $this->session->remove("referral_code");
        }
    }

    /**
     * 購入画面に紹介コードを追加
     *
     * @param TemplateEvent
     */
    public function onMypageHistoryTwig(TemplateEvent $templateEvent)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $parameters = $templateEvent->getParameters();
        $Order = $parameters['Order'];
        if (is_null($Order)) {
            return;
        }

        $ReferralCodeOrder = $this->referralCodeOrderRepository->findOneBy(['order_id' => $Order->getId()]);
        if (is_null($ReferralCodeOrder)) {
            return;
        }

        $parameters['ReferralCodeOrder'] = $ReferralCodeOrder;
        $templateEvent->setParameters($parameters);
        $templateEvent->addSnippet('@ReferralCode/default/mypage_history_referral_code.twig');

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * [order/{id}/edit]表示の時のEvent Fork.
     * 紹介コード関連項目を追加する.
     *
     * @param TemplateEvent $event
     */
    public function onAdminOrderEditTwig(TemplateEvent $templateEvent)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $parameters = $templateEvent->getParameters();
        if (is_null($parameters['Order'])) {
            return;
        }
        $Order = $parameters['Order'];
        // 紹介コード受注情報を取得する
        $ReferralCodeOrder = $this->referralCodeOrderRepository->findOneBy(['order_id' => $Order->getId()]);
        if (is_null($ReferralCodeOrder)) {
            return;
        }

        $parameters['referral_code'] = $ReferralCodeOrder->getReferralCode();
        $parameters['referral_code_name'] = $ReferralCodeOrder->getReferralCodeName();
        $templateEvent->setParameters($parameters);
        $templateEvent->addSnippet('@ReferralCode/admin/order_edit_referral_code.twig');

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * 購入メールに紹介コードを追加
     *
     * @param EventArgs
     */
    public function onMailOrder(EventArgs $eventArgs)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $message = $eventArgs->getArgument('message');
        $Order = $eventArgs->getArgument('Order');
        //$MailTemplate = $eventArgs->getArgument('MailTemplate');
        $BaseInfo = $eventArgs->getArgument('BaseInfo');

        $ReferralCodeOrder = $this->referralCodeService->getReferralCodeOrder($Order->getPreOrderId());
        if (is_null($ReferralCodeOrder)) {
            return;
        }

        $snippet = $this->getReferralCodeOrderMailSnippet($ReferralCodeOrder->getReferralCode());
        $body = str_replace("\r", '', $message->getBody());
        $search = [];
        preg_match_all('/===\\nお支払い合計：.*\\n/u', $body, $search);
        if (count($search[0]) > 0) {
            $body = preg_replace('/'.$search[0][0].'/u', $search[0][0].$snippet, $body);
            $message->setBody($body);
        }

        // HTMLメールありの場合
        if (count($message->getChildren()) > 0) {
            $Swift_MimePart = $message->getChildren()[0];
            $htmlBody = str_replace("\r", '', $Swift_MimePart->getBody());
            $htmlSnippet = $this->getReferralCodeOrderHtmlMailSnippet($ReferralCodeOrder->getReferralCode());
            $search = [];

            preg_match_all('/<hr style="border-top: 1px dotted #8c8b8b;">\\n\\s+お支払い合計：[^\\n]+\\n\\s+<br\/>/u', $htmlBody, $search);
            if (count($search[0]) > 0) {
                $htmlBody = preg_replace('/'.str_replace('/', '\/', $search[0][0]).'/u', $search[0][0].$htmlSnippet, $htmlBody);
                $Swift_MimePart->setBody($htmlBody);
            }
        }

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }

    /**
     * 管理画面からの購入メール送信時に紹介コードを追加
     *
     * @param EventArgs
     */
    public function onAdminMailOrder(EventArgs $eventArgs)
    {
        log_info('ReferralCode event '.__FUNCTION__.' start');

        $this->onMailOrder($eventArgs);

        log_info('ReferralCode event '.__FUNCTION__.' end');
    }



    /**
     * textメールの紹介コード受注メールスニペットを取得.
     *
     * @param string $referral_code
     *
     * @return string $snippet
     */
    private function getReferralCodeOrderMailSnippet($referral_code) {
        $snippet =  PHP_EOL;
        $snippet .= '***********************************************'.PHP_EOL;
        $snippet .= '　'.trans('referral_code.mail.referral_code').'                             '.PHP_EOL;
        $snippet .= '***********************************************'.PHP_EOL;
        $snippet .= PHP_EOL;
        $snippet .= trans('referral_code.mail.referral_code').'：'.$referral_code;
        $snippet .= PHP_EOL;
        return $snippet;
    }

    /**
     * htmlメールの紹介コード受注メールスニペットを取得.
     *
     * @param string $referral_code
     *
     * @return string $snippet
     */
    private function getReferralCodeOrderHtmlMailSnippet($referral_code) {
        $snippet =  '<br/>';
        $snippet .= '<hr style="border-top: 3px double #8c8b8b;">';
        $snippet .= '　'.trans('referral_code.mail.referral_code').'<br/>';
        $snippet .= '<hr style="border-top: 3px double #8c8b8b;">';
        $snippet .= trans('referral_code.mail.referral_code').'：'.$referral_code.'<br/>';
        $snippet .= '<br/>';
        return $snippet;
    }
}
