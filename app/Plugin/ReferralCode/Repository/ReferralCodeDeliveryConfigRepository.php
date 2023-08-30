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

use Eccube\Entity\Delivery;
use Eccube\Common\Constant;
use Eccube\Repository\AbstractRepository;
use Plugin\ReferralCode\Entity\ReferralCodeDeliveryConfig;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ReferralCodeDeliveryConfigRepository.
 */
class ReferralCodeDeliveryConfigRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferralCodeDeliveryConfig::class);
    }

    /**
     * 紹介コード配送設定を取得
     *
     * @return array 紹介コード配送設定
     */
    public function getReferralCodeDeliveryConfigs() {
        $qb = $this->createQueryBuilder('rcdc');
        $query = $qb->getQuery();

        //
        $ReferralCodeDeliveryConfigs = [];
        try {
            $ReferralCodeDeliveryConfigs = $query->getResult();
        } catch (NoResultException $e) {
            $ReferralCodeDeliveryConfigs = [];
        }

        // 配送先一覧と照合して、存在しない配送先設定を追加
        $DeliveryRepository = $this->getEntityManager()->getRepository(Delivery::class);
        $deliveries = $DeliveryRepository->findBy(['visible' => true]);
        foreach($deliveries as $d) {
            if (
                count(
                    array_filter(
                        $ReferralCodeDeliveryConfigs,
                        function($rcdc, $i) use ($d) {
                            return $rcdc->getDelivery()->getId() === $d->getId();
                        },
                        ARRAY_FILTER_USE_BOTH
                    )
                ) === 0
            ) {
                $ReferralCodeDeliveryConfig = new ReferralCodeDeliveryConfig();
                $ReferralCodeDeliveryConfig->setNormalOrderFlg(false);
                $ReferralCodeDeliveryConfig->setReferralCodeOrderFlg(false);
                $ReferralCodeDeliveryConfig->setDelivery($d);
                array_push($ReferralCodeDeliveryConfigs, $ReferralCodeDeliveryConfig);
            }
        }

        return $ReferralCodeDeliveryConfigs;
    }

    /**
     * save config values
     *
     * @param array $referralCodeDeliveryConfigData
     */
    public function saveConfig($referralCodeDeliveryConfigData) {
        $em = $this->getEntityManager();
        $DeliveryRepository = $this->getEntityManager()->getRepository(Delivery::class);

        $config = $this->find($referralCodeDeliveryConfigData['id']);
        if (empty($config)) {
            $config = new ReferralCodeDeliveryConfig();
        }
        $config->setNormalOrderFlg($referralCodeDeliveryConfigData['normal_order_flg'] ?? false);
        $config->setReferralCodeOrderFlg($referralCodeDeliveryConfigData['referral_code_order_flg'] ?? false);
        $config->setDelivery($DeliveryRepository->find($referralCodeDeliveryConfigData['delivery_id']));

        $em->persist($config);
        $em->flush($config);
    }
}
