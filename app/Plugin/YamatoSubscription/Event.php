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

namespace Plugin\YamatoSubscription;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;
use Plugin\YamatoSubscription\Event\Admin\OrderEvent;
use Plugin\YamatoSubscription\Event\FrontFlashMessageEvent;
use Plugin\YamatoSubscription\Event\MypageEvent;
use Plugin\YamatoSubscription\Event\ShoppingEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Class Event.
 */
class Event implements EventSubscriberInterface
{
    /**
     * @var FrontFlashMessageEvent
     */
    protected $frontFlashMessageEvent;

    /**
     * @var MypageEvent
     */
    protected $mypageEvent;

    /**
     * @var ShoppingEvent
     */
    protected $shoppingEvent;

    /**
     * @var OrderEvent
     */
    protected $adminOrderEvent;

    /**
     * @var \Twig_Environment
     */
    protected $twig;
        
    public function __construct(
        FrontFlashMessageEvent $frontFlashMessageEvent,
        ShoppingEvent $shoppingEvent,
        MypageEvent $mypageEvent,
        OrderEvent $adminOrderEvent,
        \Twig_Environment $twig
    ) {
        $this->frontFlashMessageEvent = $frontFlashMessageEvent;
        $this->shoppingEvent = $shoppingEvent;
        $this->mypageEvent = $mypageEvent;
        $this->adminOrderEvent = $adminOrderEvent;
        $this->twig = $twig;
    }

    /**
     * 各種イベントを登録
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse'],
            'Shopping/index.twig' => ['onShoppingIndexTwig', /* ReferralCodeプラグインより先に表示 */ 2],
            'Shopping/confirm.twig' => ['onShoppingConfirmTwig'],
            EccubeEvents::FRONT_SHOPPING_COMPLETE_INITIALIZE => ['onShoppingCompleteInitialize'],
            EccubeEvents::MAIL_ORDER => ['onMailOrder'],
            'Mypage/history.twig' => ['onMypageNaviTwig'],
            'Mypage/index.twig' => ['onMypageNaviTwig'],
            'Mypage/favorite.twig' => ['onMypageNaviTwig'],
            'Mypage/change.twig' => ['onMypageNaviTwig'],
            'Mypage/change_complete.twig' => ['onMypageNaviTwig'],
            'Mypage/withdraw.twig' => [['onFrontFlashMessageTwig'], ['onMypageNaviTwig']],
            'Mypage/withdraw_confirm.twig' => ['onMypageNaviTwig'],
            'Mypage/delivery.twig' => ['onMypageNaviTwig'],
            'Mypage/delivery_edit.twig' => ['onMypageNaviTwig'],
            '@YamatoPayment4/mypage/credit.twig' => [['onMypageNaviTwig'], ['onYamatoPaymentMypageTwig']],
            '@YamatoSubscription/default/Mypage/index.twig' => [['onFrontFlashMessageTwig'], ['onMypageNaviTwig']],
            '@YamatoSubscription/default/Mypage/detail.twig' => [['onFrontFlashMessageTwig'], ['onMypageNaviTwig']],
            '@YamatoSubscription/default/Mypage/change_credit_card.twig' => ['onMypageNaviTwig'],
            '@admin/Order/edit.twig' => ['onAdminOrderEditTwig'],
            '@admin/Order/index.twig' => ['onAdminOrderIndexTwig'],
            '@admin/Store/plugin_table_official.twig' => ['onAdminPluginOfficialTwig']
       ];
    }

    /**
     * レスポンスイベント（退会時の判定など）
     *
     * @param FilterResponseEvent
     */
    public function onKernelResponse(FilterResponseEvent $filterResponseEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $request = $filterResponseEvent->getRequest();
        // 先にcompleteかどうかを見ないと、退会時に $request->get('_route') がエラーで落ちる。。。
        if ($request->request->get('mode') !== 'complete' && $request->get('_route') === 'mypage_withdraw') {
            $this->mypageEvent->onMypageWithdrawResponse($filterResponseEvent);
        }
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * フロント画面にフラッシュメッセージを追加
     *
     * @param TemplateEvent
     */
    public function onFrontFlashMessageTwig(TemplateEvent $templateEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->frontFlashMessageEvent->onFrontFlashMessageTwig($templateEvent);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * Mypage画面に「定期購入履歴」メニューを追加
     *
     * @param TemplateEvent
     */
    public function onMypageNaviTwig(TemplateEvent $templateEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->mypageEvent->onMypageNaviTwig($templateEvent);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * 定期購入申し込みボタンを追加
     *
     * @param TemplateEvent
     */
    public function onShoppingIndexTwig(TemplateEvent $templateEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->shoppingEvent->onShoppingIndexTwig($templateEvent);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * 定期購入関連の入力値をセッションに保持
     *
     * @param TemplateEvent
     */
    public function onShoppingConfirmTwig(TemplateEvent $templateEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->shoppingEvent->onShoppingConfirmTwig($templateEvent);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * 定期購入だった場合に、メールを定期購入用のメールに差し替え
     *
     * @param EventArgs
     */
    public function onMailOrder(EventArgs $eventArgs)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->shoppingEvent->onMailOrder($eventArgs);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * 定期購入の場合、定期購入データを作成
     *
     * @param TemplateEvent
     */
    public function onShoppingCompleteInitialize(EventArgs $eventArgs)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->shoppingEvent->onShoppingCompleteInitialize($eventArgs);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * 定期購入関連の入力値をセッションに保持
     *
     * @param TemplateEvent
     */
    public function onYamatoPaymentMypageTwig(TemplateEvent $templateEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->mypageEvent->onYamatoPaymentMypageTwig($templateEvent);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /**
     * 定期配送の受注の場合、定期配送だとわかる目印を表示する
     *
     * @param TemplateEvent
     */
    public function onAdminOrderEditTwig(TemplateEvent $templateEvent)
    {
        log_info('YamatoSubscription event '.__FUNCTION__.' start');
        $this->adminOrderEvent->onAdminOrderEditTwig($templateEvent);
        log_info('YamatoSubscription event '.__FUNCTION__.' end');
    }

    /*
    * 注文一覧画面の上書き
    * @param TemplateEvent
    */    
    public function onAdminOrderIndexTwig(TemplateEvent $event)
    {
        $source = $this->twig->getLoader()
            ->getSourceContext("@YamatoSubscription/admin/Order/index.twig")
            ->getCode();
        $event->setSource($source);
    }    

   /*
    * プラグイン一覧画面上書き
    * @param TemplateEvent
    */    
    public function onAdminPluginOfficialTwig(TemplateEvent $event)
    {
        $source = $this->twig->getLoader()
            ->getSourceContext("@YamatoSubscription/admin/Store/plugin_table_official.twig")
            ->getCode();
        $event->setSource($source);
    }  
        
}
