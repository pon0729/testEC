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
use Eccube\Entity\Master\OrderItemType;
use Plugin\YamatoSubscription\Entity\YamatoSubsHistory;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Util\StringUtil;

/**
 * Class YamatoSubsHistoryRepository.
 */
class YamatoSubsHistoryRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, YamatoSubsHistory::class);
    }

    public function getYamatoSubsHistoriesQueryBuilder($searchData=null) {
        $qb = $this->createQueryBuilder('ysh')
            ->select(
                "ys.cancelled_date",
                "ys.id as subs_id",
                "ysh.subs_month_period",
                "o.order_date",
                "o.id as order_id",
                "concat(o.name01, ' ', o.name02) as customer_name",
                "o.email as customer_email",
                "o.payment_method",
                "o.payment_total",
                "s.shipping_date",
                "os.name as status_name"
            )
            ->distinct(true)
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubs', 'ys', 'WITH', 'ysh.YamatoSubs = ys.id')
            ->innerjoin('Eccube\\Entity\\Order', 'o', 'WITH', 'ysh.Order = o.id')
            ->innerjoin('Eccube\\Entity\\Shipping', 's', 'WITH', 'o.id = s.Order')
            ->innerjoin('Eccube\\Entity\\Master\\OrderStatus', 'os', 'WITH', 'o.OrderStatus = os.id')
            ->where('ysh.visible = :visible')
            ->andWhere('ys.visible = :visible')
            ->setParameter('visible', true)
            ->orderBy('o.id', 'DESC');

        // フィルタ絞り込み
        if (!empty($searchData['filter']) && $searchData['filter'] != YamatoSubsHistory::ALL) {
            if($searchData['filter'] == YamatoSubsHistory::ACTIVE){
                //有効のみ
                $qb->andWhere('ys.cancelled_date is null');
            }elseif($searchData['filter'] == YamatoSubsHistory::LATEST){
                //新規受付~対応中のみ
                $where_status = [
                    OrderStatus::NEW,
                    OrderStatus::IN_PROGRESS
                ];
                $qb->addOrderBy('o.order_date', 'DESC');
                $qb->andWhere($qb->expr()->in('o.OrderStatus', $where_status));
            }
        }

        return $qb;
    }

    public function searchYamatoSubsDetailHistories($searchData=null) {
        $qb = $this->createQueryBuilder('ysh')
            ->select(
                "ys.id as subs_id",
                "ysh.subs_month_period",
                "o.order_date",
                "o.id as order_id",
                "concat(o.name01, ' ', o.name02) as customer_name",
                "o.email as customer_email",
                "o.phone_number",
                "o.payment_method",
                "o.payment_total",
                "s.shipping_date",
                "os.name as status_name",
                "oi.product_name",
                "oi.quantity",
                "oi.price",
                "oi.tax_rate"
            )
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubs', 'ys', 'WITH', 'ysh.YamatoSubs = ys.id')
            ->innerjoin('Eccube\\Entity\\Order', 'o', 'WITH', 'ysh.Order = o.id')
            ->innerjoin('Eccube\\Entity\\OrderItem', 'oi', 'WITH', 'o.id = oi.Order')
            ->innerjoin('Eccube\\Entity\\Shipping', 's', 'WITH', 's.id = oi.Shipping')
            ->innerjoin('Eccube\\Entity\\Master\\OrderStatus', 'os', 'WITH', 'o.OrderStatus = os.id')
            ->where('ysh.visible = :visible')
            ->andWhere('ys.visible = :visible')
            ->andWhere('oi.OrderItemType = :order_item_type_id_product')
            ->setParameter('visible', true)
            ->setParameter('order_item_type_id_product', OrderItemType::PRODUCT)
            ->orderBy('o.update_date', 'DESC')
            ->addOrderBy('o.id', 'DESC')
            ->addOrderBy('oi.id', 'ASC');

        // フィルタ絞り込み
        if (!empty($searchData['filter']) && $searchData['filter'] != YamatoSubsHistory::ALL) {
          if($searchData['filter'] == YamatoSubsHistory::ACTIVE){
              //有効のみ
              $qb->andWhere('ys.cancelled_date is null');
          }elseif($searchData['filter'] == YamatoSubsHistory::LATEST){
              //新規受付~対応中のみ
              $where_status = [
                  OrderStatus::NEW,
                  OrderStatus::IN_PROGRESS
              ];
              $qb->addOrderBy('o.order_date', 'DESC');
              $qb->andWhere($qb->expr()->in('o.OrderStatus', $where_status));
          }
        }

        return $qb
            ->getQuery()
            ->getResult();
    }

    /**
     * 初回購入から、今までの配送間隔分の合計を計算する
     *
     * @param YamatoSubs $YamatoSubs
     *
     * @return int 初回購入から今までの配送間隔の合計
     */
    public function calculateTotalSubsMonthPeriodsFromFirstPurchasing($YamatoSubs) {
        $sub_query = $this->createQueryBuilder('yshh')
            ->select(
                'MIN(yshh.id)'
            )
            ->where('yshh.visible = :visible')
            ->andWhere('yshh.YamatoSubs = ysh.YamatoSubs')
            ->groupBy('yshh.YamatoSubs');

        $qb = $this->createQueryBuilder('ysh')
            ->select(
                "SUM(ysh.subs_month_period)"
            )
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubs', 'ys', 'WITH', 'ysh.YamatoSubs = ys.id')
            ->where('ysh.visible = :visible')
            ->andWhere('ys.visible = :visible')
            ->andWhere('ys.id = :subs_id')
            ->andWhere("ysh.id <> ({$sub_query->getDql()})") /* 初回購入時のysh.subs_month_periodは計算しない */
            ->setParameter('visible', true)
            ->setParameter('subs_id', $YamatoSubs->getId());

        return $qb
            ->getQuery()
            ->getSingleScalarResult();
    }
}
