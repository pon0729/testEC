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
use Plugin\ReferralCode\Entity\ReferralCode;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ReferralCodeRepository.
 */
class ReferralCodeRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferralCode::class);
    }

    /**
     * 有効な紹介コードを1件取得する.
     *
     * @param $referral_code
     *
     * @return $result
     */
    public function findActiveReferralCode($referral_code)
    {
        $currenDateTime = new \DateTime();

        // 時分秒を0に設定する
        $currenDateTime->setTime(0, 0, 0);

        $qb = $this->createQueryBuilder('rc')->setMaxResults(1)->select('rc');
        $qb->andWhere('rc.visible = :visible')
            ->setParameter('visible', true);

        // 紹介コード
        $qb->andWhere('rc.referral_code = :referral_code')
            ->setParameter('referral_code', $referral_code);

        // 紹介コード有効
        $qb->andWhere('rc.enable_flag = :enable_flag')
            ->setParameter('enable_flag', true);

        // 紹介コード利用可能枚数
        $qb->andWhere('rc.referral_code_use_time > 0');

        // 有効期間(FROM)
        $qb->andWhere('rc.available_from_date <= :cur_date_time OR rc.available_from_date IS NULL')
            ->setParameter('cur_date_time', $currenDateTime);

        // 有効期間(TO)
        $qb->andWhere(':cur_date_time <= rc.available_to_date OR rc.available_to_date IS NULL')
            ->setParameter('cur_date_time', $currenDateTime);

        // 実行
        $result = null;
        $results = $qb->getQuery()->getResult();
        if (!is_null($results) && count($results) > 0) {
            $result = $results[0];
        }

        return $result;
    }
}
