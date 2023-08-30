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
use Plugin\ReferralCode\Entity\ReferralCodeDetail;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ReferralCodeDetailRepository.
 */
class ReferralCodeDetailRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferralCodeDetail::class);
    }
}
