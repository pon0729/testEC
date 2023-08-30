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

namespace Plugin\CategoryRecommend4;

use Eccube\Event\TemplateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CategoryRecommendEvent implements EventSubscriberInterface
{
    /**
     * CategoryRecommendEvent constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            '@admin/Product/category.twig' => 'onRenderAdminProductCategory',
            'Product/list.twig' => 'onRenderProductList',
            // 'Block/category_nav_pc.twig' => 'onRenderBlockCategoryNavPc',
            // 'Block/category_nav_sp.twig' => 'onRenderBlockCategoryNavSp',
        ];
    }

    /**
     * 管理画面カテゴリ登録に画像ボタンを表示する.
     *
     * @param TemplateEvent $event
     */
    public function onRenderAdminProductCategory(TemplateEvent $event)
    {
        $event->addSnippet('@CategoryRecommend4/admin/Product/category.twig');
    }

    /**
     * 商品一覧にカテゴリバナーを表示する.
     *
     * @param TemplateEvent $event
     */
    public function onRenderProductList(TemplateEvent $event)
    {
        $event->addSnippet('@CategoryRecommend4/default/Product/list.twig');
    }

    // /**
    //  * カテゴリナビ(PC)にカテゴリアイコンを表示する.
    //  *
    //  * @param TemplateEvent $event
    //  */
    // public function onRenderBlockCategoryNavPc(TemplateEvent $event)
    // {
    //     $event->addSnippet('@tbsCategoryImage/default/Block/category_nav_pc.twig');
    // }
    //
    // /**
    //  * カテゴリナビ(SP)にカテゴリアイコンを表示する.
    //  *
    //  * @param TemplateEvent $event
    //  */
    // public function onRenderBlockCategoryNavSp(TemplateEvent $event)
    // {
    //     $event->addSnippet('@tbsCategoryImage/default/Block/category_nav_sp.twig');
    // }
}
