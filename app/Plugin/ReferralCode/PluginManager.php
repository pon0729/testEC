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
        $PageLayout = $container->get(PageRepository::class)->findOneBy(['url' => 'plugin_referral_code_shopping']);
        if (is_null($PageLayout)) {
            // pagelayoutの作成
            $this->createPageLayout($container);
        }
    }

    /**
     * @param array $meta
     * @param ContainerInterface $container
     */
    public function disable(array $meta, ContainerInterface $container)
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
        $PageLayout = $container->get(PageRepository::class)->findOneBy(['url' => 'plugin_referral_code_shopping']);
        if (is_null($PageLayout)) {
            // pagelayoutの作成
            $this->createPageLayout($container);
        }
    }

    /**
     * @param ContainerInterface $container
     */
    private function createPageLayout(ContainerInterface $container)
    {
        // ページレイアウトにプラグイン使用時の値を代入
        /** @var \Eccube\Entity\Page $Page */
        $Page = $container->get(PageRepository::class)->newPage();
        $Page->setEditType(Page::EDIT_TYPE_DEFAULT);
        $Page->setName('商品購入/紹介コード利用');
        $Page->setUrl('plugin_referral_code_shopping');
        $Page->setFileName('@ReferralCode/default/shopping_referral_code');
        $Page->setMetaRobots('noindex');

        // DB登録
        $entityManager = $container->get('doctrine')->getManager();
        $entityManager->persist($Page);
        $entityManager->flush($Page);

        $Layout = $container->get(LayoutRepository::class)->find(Layout::DEFAULT_LAYOUT_UNDERLAYER_PAGE);
        $PageLayout = new PageLayout();
        $PageLayout->setPage($Page)
            ->setPageId($Page->getId())
            ->setLayout($Layout)
            ->setLayoutId($Layout->getId())
            ->setSortNo(0);

        $entityManager->persist($PageLayout);
        $entityManager->flush($PageLayout);
    }

    /**
     * 紹介コード用ページレイアウトを削除.
     *
     * @param ContainerInterface $container
     */
    private function removePageLayout(ContainerInterface $container)
    {
        // ページ情報の削除
        $Page = $container->get(PageRepository::class)->findOneBy(['url' => 'plugin_referral_code_shopping']);
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
}
