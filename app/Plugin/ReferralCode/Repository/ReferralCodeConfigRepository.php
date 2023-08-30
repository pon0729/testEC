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

namespace Plugin\ReferralCode\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\ReferralCode\Entity\ReferralCodeConfig;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ReferralCodeConfigRepository.
 */
class ReferralCodeConfigRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferralCodeConfig::class);
    }

    /**
     * （税込）送料無料になる金額を取得
     *
     * @param float $default_value
     *
     * @return （税込）送料無料金額（取得できない場合、デフォルト金額を取得）
     */
    public function getDeliveryFreeAmount(?float $default_value) {
        $ReferralCodeConfig = $this->findOneBy([]);
        if (empty($ReferralCodeConfig) || is_null($ReferralCodeConfig->getDeliveryFreeAmount())) {
            return $default_value;
        }
        return $ReferralCodeConfig->getDeliveryFreeAmount();
    }

    /**
     * 定期購入の場合に適用する割引率を取得
     *
     * @param int $subscription_discount_rate
     *
     * @return 割引率(%)
     */
    public function getSubscriptionDiscountRate(int $default_value) {
        $ReferralCodeConfig = $this->findOneBy([]);
        if (empty($ReferralCodeConfig) || is_null($ReferralCodeConfig->getSubscriptionDiscountRate())) {
            return $default_value;
        }
        return $ReferralCodeConfig->getSubscriptionDiscountRate();
    }

    /**
     * 設定を保存
     *
     * @param float $delivery_free_amount
     * @param int $subscription_discount_rate
     */
    public function saveConfig(?float $delivery_free_amount, int $subscription_discount_rate) {
        $em = $this->getEntityManager();

        $ReferralCodeConfig = $this->findOneBy([]);
        if (empty($ReferralCodeConfig)) {
            $ReferralCodeConfig = new ReferralCodeConfig();
        }

        $ReferralCodeConfig->setDeliveryFreeAmount($delivery_free_amount);
        $ReferralCodeConfig->setSubscriptionDiscountRate($subscription_discount_rate);

        $em->persist($ReferralCodeConfig);
        $em->flush($ReferralCodeConfig);
    }

}
