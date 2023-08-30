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
use Eccube\Repository\OrderRepository;
use Eccube\Repository\ProductRepository;

use Plugin\YamatoPayment4\Repository\ConfigRepository;
use Plugin\YamatoPayment4\Repository\YamatoOrderRepository;
use Plugin\YamatoPayment4\Repository\YamatoPaymentMethodRepository;
use Plugin\YamatoPayment4\Service\Client\CreditClientService;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class MypageEvent.
 */
class MypageEvent extends AbstractEvent
{
    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var ConfigRepository
     */
    protected $yamatoPluginRepository;
 
    /**
     * @var YamatoOrderRepository
     */
    protected $yamatoOrderRepository;
 
    /**
     * @var YamatoPaymentMethodRepository
     */
    protected $yamatoPaymentMethodRepository;

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
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
        ConfigRepository $yamatoPluginRepository,
        YamatoOrderRepository $yamatoOrderRepository,
        YamatoPaymentMethodRepository $yamatoPaymentMethodRepository,
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
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->yamatoPluginRepository = $yamatoPluginRepository;
        $this->yamatoOrderRepository = $yamatoOrderRepository;
        $this->yamatoPaymentMethodRepository = $yamatoPaymentMethodRepository;
        $this->yamatoSubsRepository = $yamatoSubsRepository;
        $this->yamatoSubsConfigRepository = $yamatoSubsConfigRepository;
    }

    /**
     * Mypage画面に「定期購入履歴」メニューを追加
     *
     * @param TemplateEvent
     */
    public function onMypageNaviTwig(TemplateEvent $templateEvent)
    {
        $request = $this->requestStack->getCurrentRequest();

        if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
            return;
        }
        $templateEvent->addSnippet('@YamatoSubscription/default/Mypage/add_navi.twig');
        if (stripos($request->getUri(), 'yamatosubscription')) {
            // YamatoPayment側が対応していないため、手動で「カード編集」パネルを追加
            $this->addYamatoPaymentNavi($templateEvent);
        }
    }

    /**
     * Mypage退会確認画面にて、定期購入を継続している場合退会できなくする
     *
     * @param FilterResponseEvent
     */
    public function onMypageWithdrawResponse(FilterResponseEvent $filterResponseEvent)
    {
        if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
            return;
        }
        $request = $filterResponseEvent->getRequest();
        if ($request->getMethod() !== 'POST') {
            return;
        }

        if ( $this->yamatoSubsRepository->doesUserHaveSubscriptionItem($this->tokenStorage->getToken()->getUser()) ) {
            $this->addError(trans('yamatosubscription.mypage.withdraw.cannot_if_subscripting'));
            $redirectUrl = $request->getUri();
            $filterResponseEvent->setResponse(new RedirectResponse($redirectUrl));
        }
    }

    /**
     * (js側) クレカ削除時に、定期購入に使っているクレカだったらNGとする
     *
     * @param TemplateEvent
     */
    public function onYamatoPaymentMypageTwig(TemplateEvent $templateEvent)
    {
        if (!$this->authorizationChecker->isGranted('ROLE_USER')) {
            return;
        }
        $Customer = $this->tokenStorage->getToken()->getUser();
        $currentYamatoSubsList = $this->yamatoSubsRepository->searchUsersActiveYamatoSubsList($Customer);
        if (empty($currentYamatoSubsList)) {
            return;
        }

        $parameters = $templateEvent->getParameters();
        $parameters['str_current_subs_credit_card_keys'] = implode(
            ',',
            array_map(function($ys) {
                return $ys->getCreditCardKey();
            }, $currentYamatoSubsList)
        );
        $templateEvent->setParameters($parameters);
        $templateEvent->addSnippet('@YamatoSubscription/default/Mypage/subscription_card_validation.twig');
    }



    private function addYamatoPaymentNavi(TemplateEvent $templateEvent)
    {
        $client = new CreditClientService(
            $this->eccubeConfig,
            $this->productRepository,
            $this->orderRepository,
            $this->yamatoPluginRepository,
            $this->yamatoPaymentMethodRepository,
            $this->yamatoOrderRepository,
            $this->container->get('router')
        );
        $setting = $client->getUserSettings();
        if($setting['use_option'] == '0') {
            // オプションサービス契約時のみ
            $templateEvent->addSnippet('@YamatoPayment4/mypage/add_navi.twig');
        }
    }
}
