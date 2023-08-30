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

namespace Plugin\YamatoSubscription\Event;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\EccubeConfig;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Eccube\Repository\PaymentRepository;
use Plugin\YamatoPayment4\Service\Method AS YamatoMethod;
use Plugin\YamatoSubscription\Helper\YamatoAPIHelper;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository;
use Plugin\YamatoSubscription\Service\SubscriptionMailService;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class ShoppingEvent.
 */
class ShoppingEvent extends AbstractEvent
{
    /**
     * @var PaymentRepository
     */
    protected $paymentRepository;

    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    /**
     * @var YamatoSubsConfigRepository
     */
    protected $yamatoSubsConfigRepository;

    public function __construct(
        ContainerInterface $container,
        EccubeConfig $eccubeConfig,
        RequestStack $requestStack,
        SessionInterface $session,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        EntityManagerInterface $entityManager,
        PaymentRepository $paymentRepository,
        YamatoSubsRepository $yamatoSubsRepository,
        YamatoSubsConfigRepository $yamatoSubsConfigRepository
    ) {
        parent::__construct(
            $container,
            $eccubeConfig,
            $requestStack,
            $session,
            $authorizationChecker,
            $tokenStorage,
            $entityManager
        );
        $this->paymentRepository = $paymentRepository;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsConfigRepository = $yamatoSubsConfigRepository;
    }

    /**
     * ご注文手続き の画面で定期購入申し込みボタンを追加
     *
     * @param TemplateEvent
     */
    public function onShoppingIndexTwig(TemplateEvent $templateEvent)
    {
        $parameters = $templateEvent->getParameters();
        $Order = $parameters['Order'];
        $request = $this->requestStack->getCurrentRequest();

        // 予約商品などを定期購入対象外にする。
        $sale_types = array_map(function($sale_type) { return $sale_type->getId(); }, $this->getSaleTypesFrom($Order));
        $ignoring_sale_type_ids = explode(',', $this->yamatoSubsConfigRepository->getIgnoringSaleTypeIds());
        $valid_sale_types = true;
        foreach ($sale_types as $sale_type) {
            if ( in_array((string) $sale_type, $ignoring_sale_type_ids, true) ) {
                $valid_sale_types = false;
            }
        }

        // クレジットカード支払い以外の場合、定期購入できないようにする
        $isCreditCardPayment = false;
        $Payment = $Order->getPayment();
        $dataBag = $request->request->get('_shopping_order');
        if($dataBag === null || !array_key_exists('Payment', $dataBag)) {
            if($Payment === null) { // 配送方法を変えると支払方法が未設定になるケースがある.
                $paymentId = null;
            } else {
                $paymentId = $Payment->getId();
            }
        } else {
            $paymentId = $dataBag['Payment'];
        }
        $Credit = $this->paymentRepository->findOneBy(['method_class' => YamatoMethod\Credit::class]);
        if (($Credit !== null) && ($paymentId == $Credit->getId())) {
            $isCreditCardPayment = true;
        }

        // ゲスト購入でない かつ 有効な販売種別 かつ クレジットカード決済 の場合、定期購入可能
        $subscribable = false;
        if ($this->authorizationChecker->isGranted('ROLE_USER') && $valid_sale_types && $isCreditCardPayment) {
            $subscribable = true;
        }

        $subscription_flg = false;
        if ($subscribable) {
            if (is_null($request->request->get('subscription_flg'))) {
                if ( $this->session->get($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG']) ) {
                    $subscription_flg = true;
                } else {
                    $this->removeSubscriptionSessionData();
                }
            } else {
                if ($request->request->get('subscription_flg') === '1') {
                    $this->session->set($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG'], true);
                    $subscription_flg = true;
                } else {
                    $this->removeSubscriptionSessionData();
                }
            }
        } else {
            $this->removeSubscriptionSessionData();
        }

        if ($subscribable) {
            $parameters = $templateEvent->getParameters();
            $parameters['subscription_flg'] = $subscription_flg;
            $templateEvent->setParameters($parameters);
            $templateEvent->addSnippet('@YamatoSubscription/default/Shopping/shopping_yamato_subscription_form.twig');
        }

        // 定期購入の注意書き文言を常に表示させる
        $templateEvent->addSnippet('@YamatoSubscription/default/Shopping/subscription_attention_message.twig');
    }

    /**
     * 定期購入確認画面からの遷移だった場合、配送間隔をセッションに保持
     * 通常の注文手続きからだった場合、配送間隔をセッションから削除
     *
     * @param TemplateEvent
     */
    public function onShoppingConfirmTwig(TemplateEvent $templateEvent)
    {
        $request = $this->requestStack->getCurrentRequest();

        if ( $request->isMethod('post') && $this->session->get($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG']) ) {
            $this->session->set($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_MONTH_PERIOD'], intval($request->request->get('subs_month_period'), 10));
            $templateEvent->addSnippet('@YamatoSubscription/default/Shopping/confirm_change_buttons.twig');
        }
    }

    /**
     * 定期購入の場合、購入メール定期購入用のメールに差し替え
     *
     * @param EventArgs
     */
    public function onMailOrder(EventArgs $eventArgs)
    {
        $message = $eventArgs->getArgument('message');
        //$Order = $eventArgs->getArgument('Order');
        //$BaseInfo = $eventArgs->getArgument('BaseInfo');

        if (!$this->session->has($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG'])) {
            return;
        }
        $subs_month_period = $this->session->get($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_MONTH_PERIOD']);

        $message->setSubject(str_replace('ご注文ありがとうございます', '定期お届けサービス：ご注文ありがとうございます', $message->getSubject()));

        $body = str_replace("\r", '', $message->getBody());
        $body = SubscriptionMailService::replaceTextMailBodyAsYamatoSubscriptionOne(
            $body,
            $subs_month_period
        );
        $message->setBody($body);

        // HTMLメールありの場合
        if (count($message->getChildren()) > 0) {
            $Swift_MimePart = $message->getChildren()[0];
            $htmlBody = str_replace("\r", '', $Swift_MimePart->getBody());
            $htmlBody = SubscriptionMailService::replaceHtmlMailBodyAsYamatoSubscriptionOne(
                $htmlBody,
                $subs_month_period
            );
            $Swift_MimePart->setBody($htmlBody);
        }
    }

    /**
     * 定期購入の場合、定期購入させる
     *
     * @param EventArgs
     */
    public function onShoppingCompleteInitialize(EventArgs $eventArgs)
    {
        $Order = $eventArgs->getArgument('Order');
        $request = $this->requestStack->getCurrentRequest();

        if ($this->session->has($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG'])) {
            $subs_month_period = $this->session->get($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_MONTH_PERIOD']);
            $this->removeSubscriptionSessionData();

            $this->entityManager->getConnection()->beginTransaction();
            try {
                $credit_card_key = $this->getLastUsedCreditCardKey($Order->getCustomer()->getId());
                $this->yamatoSubsRepository->register($Order, $subs_month_period, $credit_card_key);

                $this->entityManager->getConnection()->commit();
                log_info('定期購入処理完了');
            } catch (\Exception $e) {
                log_error(trans('yamatosubscription.log.error.prefix'), [$e->getMessage()]);
                $this->entityManager->getConnection()->rollback();
                $this->addError('yamatosubscription.shopping.system.error');
                $eventArgs->setResponse($this->redirectToRoute('shopping_error'));
            }
        }
    }



    /*
     * $Orderからsale_typeの配列を取得
     *
     * @param Order $Order
     *
     * @return array
     */
    private function getSaleTypesFrom($Order)
    {
        $saleTypes = [];
        foreach ($Order->getOrderItems() as $Item) {
            if ($Item->isProduct()) {
                $ProductClass = $Item->getProductClass();
                $saleTypes[] = $ProductClass->getSaleType();
            }
        }
        return array_unique($saleTypes);
    }

    /*
     * セッションにある定期購入用の情報を削除
     */
    private function removeSubscriptionSessionData()
    {
        $this->session->remove($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_FLG']);
        $this->session->remove($this->eccubeConfig['SESSION_KEY_SUBSCRIPTION_MONTH_PERIOD']);
    }

    /**
     * get last-used credit card key number(last 4 digits of credit card number)
     *
     * @param string $access_key
     * @param integer $customer_id
     * @return integer credit card key
     */
    private function getLastUsedCreditCardKey($customer_id) {
        $yamatoAPIHelper = new YamatoAPIHelper($this->eccubeConfig, $this->yamatoSubsConfigRepository);
        $credit_info_api_response = $yamatoAPIHelper->callYamatoCreditCardInfoInquiryAPI(
            $member_id = $customer_id,
            $authentication_key = substr(((string) $customer_id), 0, 8)
        );
        if ($credit_info_api_response['returnCode'] !== '0') {
            throw new \Exception("Yamato API Error... Error code: {$credit_info_api_response['errorCode']}");
        }
        // for saving payed credit card, sort desc ---> pick up first credit card
        usort($credit_info_api_response['cardData'], function ($a, $b) {
            return -($a['lastCreditDate'] <=> $b['lastCreditDate']);
        });
        return substr($credit_info_api_response['cardData'][0]['maskingCardNo'], -4);
    }
}
