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

namespace Plugin\YamatoSubscription\Util;

/**
 * Class DateTimeUtil.
 * Util to calculate DateTime object.
 */
class DateTimeUtil
{
    /**
     * replace day of target DateTime
     * if param $datetime month is '11' and $day = 31, result month will be '11/30', won't be '12/1' due to php behavior.
     * 
     * @param DateTime $datetime
     * @param int $day
     * @return DateTime replaced datetime
     */
    public static function replaceDay(\DateTime $datetime, int $day)
    {
        $d1 = clone $datetime;
        $d2 = clone $datetime;
        $d1->setDate($d1->format('Y'), $d1->format('m'), $day);
        $d2->modify('last day of this month');
        return $d1 < $d2 ? $d1 : $d2;
    }

    /**
     * add months
     * if param $datetime is '12/31' and $n = 2, next month will be '2/28', won't be '3/3' due to php behavior.
     * 
     * @param DateTime $datetime
     * @param int $n
     * @return DateTime added datetime
     */
    public static function addMonths(\DateTime $datetime, int $n)
    {
        $d1 = clone $datetime;
        $d2 = clone $datetime;
        $d1->modify('+'.$n.' month');
        $d2->modify('last day of '.$n.' month');
        return $d1 < $d2 ? $d1 : $d2;
    }
}
