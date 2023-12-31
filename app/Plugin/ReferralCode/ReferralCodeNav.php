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

use Eccube\Common\EccubeNav;

/**
 * Class ReferralCodeNav.
 */
class ReferralCodeNav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            'order' => [
                'children' => [
                    'plugin_referral_code_admin_list' => [
                        'name' => 'referral_code.admin.nav.referral_code_list',
                        'url' => 'plugin_referral_code_admin_list',
                    ],
                    'plugin_referral_code_admin_new' => [
                        'name' => 'referral_code.admin.nav.referral_code_new',
                        'url' => 'plugin_referral_code_admin_new',
                    ],
                ],
            ],
        ];
    }
}
