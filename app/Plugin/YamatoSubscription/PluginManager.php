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

use Eccube\Entity\Layout;
use Eccube\Entity\Page;
use Eccube\Plugin\AbstractPluginManager;
use Eccube\Entity\PageLayout;
use Eccube\Repository\LayoutRepository;
use Eccube\Repository\PageLayoutRepository;
use Eccube\Repository\PageRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Eccube\Repository\PluginRepository;
use Eccube\Service\PluginService;
use Plugin\YamatoSubscription\Repository\YamatoSubsRepository;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    /**
     * @param array $meta
     * @param ContainerInterface $container
     */
    public function enable(array $meta, ContainerInterface $container)
    {
		//無効化時にリレーションが剥がれる為有効化時にProxy再生成
		$Plugin = $container->get(PluginRepository::class)->findByCode('YamatoSubscription');
		$PluginService = $container->get(PluginService::class);
		$config = $PluginService->readConfig($PluginService->calcPluginDir($Plugin->getCode()));
		$PluginService->generateProxyAndUpdateSchema($Plugin, $config);
        $this->createOrUpdatePageLayout($container);
    }

    /**
     * @param array $meta
     * @param ContainerInterface $container
     */
    public function uninstall(array $meta, ContainerInterface $container)
    {
        // pagelayoutの削除
        $this->removePageLayout($container);
    }

    /**
     * @param array $meta
     * @param ContainerInterface $container
     */
    public function update(array $meta, ContainerInterface $container)
    {
        /** @var Plugin $Plugin */
        $Plugin = $container->get(PluginRepository::class)->findByCode('YamatoSubscription');
        $PluginService = $container->get(PluginService::class);
        $config = $PluginService->readConfig($PluginService->calcPluginDir($Plugin->getCode()));
        $PluginService->generateProxyAndUpdateSchema($Plugin, $config);
        if (version_compare($Plugin->getVersion(), '1.5.0', '<=')) {
            //DeliveryCount初期設定
            $this->setDeliveryCount($container);
        }
        
        $this->createOrUpdatePageLayout($container);
    }

    /**
     * @param ContainerInterface $container
     */
    private function createOrUpdatePageLayout(ContainerInterface $container)
    {
        $this->createOrUpdateShoppingPageLayout($container);
        $this->createOrUpdateMypageSubsHistoryPageLayout($container);
        $this->createOrUpdateMypageDetailPageLayout($container);
        $this->createOrUpdateMypageChangeCreditCardPageLayout($container);
    }

    private function createOrUpdateShoppingPageLayout(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $page_name = '商品購入/ヤマト定期購入確認画面';
        $url = 'plugin_yamato_subscription_shopping';
        $file_name = '@YamatoSubscription/default/Shopping/shopping';

        $Page = $container->get(PageRepository::class)->findOneBy(['url' => $url]);
        if (is_null($Page)) {
            $Page = $container->get(PageRepository::class)->newPage();
            $Page->setEditType(Page::EDIT_TYPE_DEFAULT);
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $Page->setMetaRobots('noindex');
            $entityManager->persist($Page);
            $entityManager->flush();

            $Layout = $container->get(LayoutRepository::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
            $PageLayout = new PageLayout();
            $PageLayout->setPage($Page)
                ->setPageId($Page->getId())
                ->setLayout($Layout)
                ->setLayoutId($Layout->getId())
                ->setSortNo(0);
            $entityManager->persist($PageLayout);
            $entityManager->flush();
        } else {
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $entityManager->flush();
        }

    }

    private function createOrUpdateMypageSubsHistoryPageLayout(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $page_name = 'MYページ/ヤマト定期購入履歴一覧画面';
        $url = 'plugin_yamato_subscription_mypage';
        $file_name = '@YamatoSubscription/default/Mypage/index';

        $Page = $container->get(PageRepository::class)->findOneBy(['url' => $url]);
        if (is_null($Page)) {
            $Page = $container->get(PageRepository::class)->newPage();
            $Page->setEditType(Page::EDIT_TYPE_DEFAULT);
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $Page->setMetaRobots('noindex');
            $entityManager->persist($Page);
            $entityManager->flush();

            $Layout = $container->get(LayoutRepository::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
            $PageLayout = new PageLayout();
            $PageLayout->setPage($Page)
                ->setPageId($Page->getId())
                ->setLayout($Layout)
                ->setLayoutId($Layout->getId())
                ->setSortNo(0);
            $entityManager->persist($PageLayout);
            $entityManager->flush();
        } else {
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $entityManager->flush();
        }
    }

    private function createOrUpdateMypageDetailPageLayout(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $page_name = 'MYページ/ヤマト定期購入詳細画面';
        $url = 'plugin_yamato_subscription_mypage_detail';
        $file_name = '@YamatoSubscription/default/Mypage/detail';

        $Page = $container->get(PageRepository::class)->findOneBy(['url' => $url]);
        if (is_null($Page)) {
            $Page = $container->get(PageRepository::class)->newPage();
            $Page->setEditType(Page::EDIT_TYPE_DEFAULT);
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $Page->setMetaRobots('noindex');
            $entityManager->persist($Page);
            $entityManager->flush();

            $Layout = $container->get(LayoutRepository::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
            $PageLayout = new PageLayout();
            $PageLayout->setPage($Page)
                ->setPageId($Page->getId())
                ->setLayout($Layout)
                ->setLayoutId($Layout->getId())
                ->setSortNo(0);
            $entityManager->persist($PageLayout);
            $entityManager->flush();
        } else {
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $entityManager->flush();
        }
    }

    private function createOrUpdateMypageChangeCreditCardPageLayout(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $page_name = 'MYページ/ヤマト定期購入詳細（クレジットカード変更）画面';
        $url = 'plugin_yamato_subscription_mypage_change_credit_card';
        $file_name = '@YamatoSubscription/default/Mypage/change_credit_card';

        $Page = $container->get(PageRepository::class)->findOneBy(['url' => $url]);
        if (is_null($Page)) {
            $Page = $container->get(PageRepository::class)->newPage();
            $Page->setEditType(Page::EDIT_TYPE_DEFAULT);
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $Page->setMetaRobots('noindex');
            $entityManager->persist($Page);
            $entityManager->flush();

            $Layout = $container->get(LayoutRepository::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
            $PageLayout = new PageLayout();
            $PageLayout->setPage($Page)
                ->setPageId($Page->getId())
                ->setLayout($Layout)
                ->setLayoutId($Layout->getId())
                ->setSortNo(0);
            $entityManager->persist($PageLayout);
            $entityManager->flush();
        } else {
            $Page->setName($page_name);
            $Page->setUrl($url);
            $Page->setFileName($file_name);
            $entityManager->flush();
        }
    }

    /**
     * 本プラグイン用ページレイアウトを削除.
     *
     * @param ContainerInterface $container
     */
    private function removePageLayout(ContainerInterface $container)
    {
        $this->removeTargetPageLayout($container, 'plugin_yamato_subscription_shopping');
        $this->removeTargetPageLayout($container, 'plugin_yamato_subscription_mypage');
        $this->removeTargetPageLayout($container, 'plugin_yamato_subscription_mypage_detail');
        $this->removeTargetPageLayout($container, 'plugin_yamato_subscription_mypage_change_credit_card');
    }

    private function removeTargetPageLayout(ContainerInterface $container, $page_url) {
        $Page = $container->get(PageRepository::class)->findOneBy(['url' => $page_url]);
        if ($Page) {
            $Layout = $container->get(LayoutRepository::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
            $PageLayout = $container->get(PageLayoutRepository::class)->findOneBy(['Page' => $Page, 'Layout' => $Layout]);
            // Blockの削除
            $entityManager = $container->get('doctrine')->getManager();
            $entityManager->remove($PageLayout);
            $entityManager->remove($Page);
            $entityManager->flush();
        }
    }

    /**
     * delivery_countにcredit_countをコピー
     */
    private function setDeliveryCount(ContainerInterface $container)
    {
        $this->entityManager = $container->get('doctrine.orm.entity_manager');
        $yamatoSubsRepository = $container->get(yamatoSubsRepository::class);
        $YamatoSubs = $yamatoSubsRepository->findBy([]);
        foreach ($YamatoSubs as $YamatoSub) {
            $YamatoSub
                ->setDeliveryCount($YamatoSub->getCreditCount());
            $this->entityManager->persist($YamatoSub);
        }
        $this->entityManager->flush();
    }    

}
