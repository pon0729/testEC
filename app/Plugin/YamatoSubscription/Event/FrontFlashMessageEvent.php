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

use Eccube\Event\TemplateEvent;

/**
 * Class FrontFlashMessageEvent.
 */
class FrontFlashMessageEvent
{
    public function __construct() {
        // nop
    }

    /**
     * フロント画面にフラッシュメッセージを追加
     *
     * @param TemplateEvent
     */
    public function onFrontFlashMessageTwig(TemplateEvent $templateEvent)
    {
        $templateEvent->addSnippet('@YamatoSubscription/default/mypage_flash_message.twig');
    }
}
