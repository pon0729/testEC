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

namespace Plugin\YamatoSubscription\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityNotFoundException;
use Eccube\Entity\AbstractEntity;

/**
 * YamatoSubsConfig
 *
 * @ORM\Table(name="plg_yamato_subs_config")
 * @ORM\Entity(repositoryClass="Plugin\YamatoSubscription\Repository\YamatoSubsConfigRepository")
 */
class YamatoSubsConfig extends AbstractEntity
{
    /**
     * （YamatoPayment4プラグイン側の設定）実行モード dev-env
     */
    const EXEC_MODE_DEV = 0;
    /**
     * （YamatoPayment4プラグイン側の設定）実行モード production-env
     */
    const EXEC_MODE_PRODUCTION = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var config_key
     *
     * @ORM\Column(name="config_key", type="string")
     */
    private $config_key;

    /**
     * @var config_valud
     *
     * @ORM\Column(name="config_value", type="string", nullable=true)
     */
    private $config_value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetimetz")
     */
    private $create_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetimetz")
     */
    private $update_date;

    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getConfigKey()
    {
        return $this->config_key;
    }

    /**
     * @param int $config_key
     *
     * @return $this
     */
    public function setConfigKey($config_key)
    {
        $this->config_key = $config_key;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfigValue()
    {
        return $this->config_value;
    }

    /**
     * @param int $config_value
     *
     * @return $this
     */
    public function setConfigValue($config_value)
    {
        $this->config_value = $config_value;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * @param \DateTime $create_date
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * @param \DateTime $update_date
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->update_date = $update_date;

        return $this;
    }
}
