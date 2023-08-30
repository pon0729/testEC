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

use Eccube\Common\EccubeNav;

/**
 * Class YamatoSubscriptionNav.
 */
class YamatoSubscriptionNav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            'order' => [
                'children' => [
                    'plugin_yamato_subscription_admin_list' => [
                        'name' => 'yamatosubscription.admin.nav.list',
                        'url' => 'plugin_yamato_subscription_admin_list',
                    ],
                    'plugin_yamato_subscription_admin_discount_list' => [
                        'name' => 'yamatosubscription.admin.nav.discount_list',
                        'url' => 'plugin_yamato_subscription_admin_discount_list',
                    ],
                ],
            ],
        ];
    }
}
