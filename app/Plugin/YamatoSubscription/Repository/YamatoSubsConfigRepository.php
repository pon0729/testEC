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

namespace Plugin\YamatoSubscription\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\YamatoPayment4\Repository\ConfigRepository AS YamatoPayment4ConfigRepository;
use Plugin\YamatoSubscription\Entity\YamatoSubsConfig;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsConfigRepository.
 */
class YamatoSubsConfigRepository extends AbstractRepository
{
    private $key_ignoring_sale_type_ids  = 'ignoring_sale_type_ids';

    /**
     * @var YamatoPayment4ConfigRepository
     */
    protected $yamatoPayment4ConfigRepository;

    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry,
        YamatoPayment4ConfigRepository $yamatoPayment4ConfigRepository
    )
    {
        parent::__construct($registry, YamatoSubsConfig::class);
        $this->yamatoPayment4ConfigRepository = $yamatoPayment4ConfigRepository;
    }

    /**
     * is YamatoPayment4 production exec mode or not
     *
     * @return if true, then production exec mode. if not, then dev exec mode
     */
    public function isProductionExecMode() {
        return $this->getExecMode() === YamatoSubsConfig::EXEC_MODE_PRODUCTION;
    }

    /**
     * get trader_code from YamatoPayment4 settings
     *
     * @return trader_code
     */
    public function getTraderCode() {
        $yamatoPayment4ConfigRepository = $this->yamatoPayment4ConfigRepository->get();
        if (is_null($yamatoPayment4ConfigRepository)) {
            return null;
        }
        $subData = $yamatoPayment4ConfigRepository->getSubData();
        if (empty($subData) || empty($subData['shop_id'])) {
            return null;
        }
        return $subData['shop_id'];
    }

    /**
     * get access_key from YamatoPayment4 settings
     *
     * @return access_key
     */
    public function getAccessKey() {
        $yamatoPayment4ConfigRepository = $this->yamatoPayment4ConfigRepository->get();
        if (is_null($yamatoPayment4ConfigRepository)) {
            return null;
        }
        $subData = $yamatoPayment4ConfigRepository->getSubData();
        if (empty($subData) || empty($subData['access_key'])) {
            return null;
        }
        return $subData['access_key'];
    }

    /**
     *
     */
    public function getIgnoringSaleTypeIds() {
        $Config = $this->findOneBy(['config_key' => $this->key_ignoring_sale_type_ids]);
        return empty($Config) ? '' : $Config->getConfigValue();
    }

    /**
     * save configurations
     *
     * @param $ignoring_sale_type_ids sale_type ids string separated by comma
     */
    public function saveConfig($ignoring_sale_type_ids) {
        $now = new \DateTime();

        $ConfigIgnoringSaleTypeIds = $this->findOneBy(['config_key' => $this->key_ignoring_sale_type_ids]);
        if (empty($ConfigIgnoringSaleTypeIds)) {
            $ConfigIgnoringSaleTypeIds = new YamatoSubsConfig();
            $ConfigIgnoringSaleTypeIds
                ->setConfigKey($this->key_ignoring_sale_type_ids)
                ->setConfigValue($ignoring_sale_type_ids)
                ->setCreateDate($now)
                ->setUpdateDate($now);
        } else {
            $ConfigIgnoringSaleTypeIds
                ->setConfigValue($ignoring_sale_type_ids)
                ->setUpdateDate($now);
        }

        $em = $this->getEntityManager();
        $em->persist($ConfigIgnoringSaleTypeIds);
        $em->flush($ConfigIgnoringSaleTypeIds);
    }



    /**
     * get exec_mode from YamatoPayment4 settings
     *
     * @return exec_mode(0: dev-env, 1: production-env)
     */
    private function getExecMode() {
        $yamatoPayment4ConfigRepository = $this->yamatoPayment4ConfigRepository->get();
        if (is_null($yamatoPayment4ConfigRepository)) {
            return null;
        }
        $subData = $yamatoPayment4ConfigRepository->getSubData();
        if (empty($subData) || empty($subData['exec_mode'])) {
            return null;
        }
        return $subData['exec_mode'];
    }
}
