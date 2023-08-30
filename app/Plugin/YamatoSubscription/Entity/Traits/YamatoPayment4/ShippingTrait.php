<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\YamatoSubscription\Entity\Traits\YamatoPayment4;

use Doctrine\ORM\Mapping as ORM;

trait ShippingTrait
{
    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    public $pre_tracking_number;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $tracking_information;

    /**
     * {@inheritdoc}
     */
    public function setPreTrackingNumber($pre_tracking_number)
    {
        $this->pre_tracking_number = $pre_tracking_number;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPreTrackingNumber()
    {
        return $this->pre_tracking_number;
    }

    /**
     * {@inheritdoc}
     */
    public function setTrackingInformation($tracking_information)
    {
        $this->tracking_information = $tracking_information;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTrackingInformation()
    {
        return $this->tracking_information;
    }
}
