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

namespace Plugin\YamatoSubscription\Event\Admin;

use Doctrine\ORM\EntityManagerInterface;

use Eccube\Common\EccubeConfig;
use Eccube\Event\EventArgs;
use Eccube\Event\TemplateEvent;

use Plugin\YamatoSubscription\Event\AbstractEvent;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class OrderEvent.
 */
class OrderEvent extends AbstractEvent
{
    /**
     * @var YamatoSubsRepository
     */
    protected $yamatoSubsRepository;

    public function __construct(
        ContainerInterface $container,
        EccubeConfig $eccubeConfig,
        RequestStack $requestStack,
        SessionInterface $session,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        EntityManagerInterface $entityManager,
        YamatoSubsRepository $yamatoSubsRepository
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
        $this->yamatoSubsRepository = $yamatoSubsRepository;
    }

    /**
     * 定期配送の受注の場合、定期配送だとわかる目印を表示する
     *
     * @param TemplateEvent
     */
    public function onAdminOrderEditTwig(TemplateEvent $templateEvent)
    {
        $parameters = $templateEvent->getParameters();
        if (empty($parameters['id'])) {
            return;
        }

        $Order = $parameters['Order'];
        $parameters['YamatoSubs'] = $this->yamatoSubsRepository->findYamatoSubsFromOrder($Order);
        $templateEvent->setParameters($parameters);
        $templateEvent->addSnippet('@YamatoSubscription/admin/Order/show_subscription_info.twig');
    }
}
