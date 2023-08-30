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
use Plugin\YamatoSubscription\Entity\YamatoSubs;
use Plugin\YamatoSubscription\Entity\YamatoSubsHistory;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersOrderItemRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersShippingRepository;
use Plugin\YamatoSubscription\Repository\YamatoSubsUsersReferralCodeOrderRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class YamatoSubsRepository.
 */
class YamatoSubsRepository extends AbstractRepository
{
    /**
     * @var YamatoSubsHistoryRepository
     */
    protected $yamatoSubsHistoryRepository;

    /**
     * @var YamatoSubsUsersOrderRepository
     */
    protected $yamatoSubsUsersOrderRepository;

    /**
     * @var YamatoSubsUsersOrderItemRepository
     */
    protected $yamatoSubsUsersOrderItemRepository;

    /**
     * @var YamatoSubsUsersShippingRepository
     */
    protected $yamatoSubsUsersShippingRepository;

    /**
     * @var YamatoSubsUsersReferralCodeOrderRepository
     */
    protected $yamatoSubsUsersReferralCodeOrderRepository;

    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(
        RegistryInterface $registry,
        YamatoSubsHistoryRepository $yamatoSubsHistoryRepository,
        YamatoSubsUsersOrderRepository $yamatoSubsUsersOrderRepository,
        YamatoSubsUsersOrderItemRepository $yamatoSubsUsersOrderItemRepository,
        YamatoSubsUsersShippingRepository $yamatoSubsUsersShippingRepository,
        YamatoSubsUsersReferralCodeOrderRepository $yamatoSubsUsersReferralCodeOrderRepository
    ) {
        parent::__construct($registry, YamatoSubs::class);
        $this->yamatoSubsHistoryRepository = $yamatoSubsHistoryRepository;
        $this->yamatoSubsUsersOrderRepository = $yamatoSubsUsersOrderRepository;
        $this->yamatoSubsUsersOrderItemRepository = $yamatoSubsUsersOrderItemRepository;
        $this->yamatoSubsUsersShippingRepository = $yamatoSubsUsersShippingRepository;
        $this->yamatoSubsUsersReferralCodeOrderRepository = $yamatoSubsUsersReferralCodeOrderRepository;
    }

    public function doesUserHaveSubscriptionItem($Customer) {
        $qb = $this->createQueryBuilder('ys')
            ->select(
                '1'
            )
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory', 'ysh', 'WITH', 'ys.id = ysh.YamatoSubs')
            ->innerjoin('Eccube\\Entity\\Order', 'o', 'WITH', 'ysh.Order = o.id')
            ->where('ys.visible = :visible')
            ->andWhere('ysh.visible = :visible')
            ->andWhere('ys.cancelled_date IS NULL')
            ->andWhere('o.Customer = :customer_id')
            ->setParameter('visible', true)
            ->setParameter('customer_id', $Customer->getId());
        $result = $qb
            ->getQuery()
            ->getResult();
        return !empty($result);
    }

    public function searchUsersYamatoSubsList($Customer) {
        $sub_query = $this->createQueryBuilder('ys2')
            ->select(
                'MIN(ysh2.Order)'
            )
            ->innerJoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory', 'ysh2', 'WITH', 'ys2.id = ysh2.YamatoSubs')
            ->where('ys2.visible = :visible')
            ->andWhere('ysh2.visible = :visible')
            ->andWhere('ys2.id = ys.id')
            ->groupBy('ys2.id');

        $qb = $this->createQueryBuilder('ys')
            ->select(
                'ys',
                'o',
                'ysuo'
            )
            ->innerJoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory', 'ysh', 'WITH', 'ys.id = ysh.YamatoSubs')
            ->innerJoin('Eccube\\Entity\\Order', 'o', 'WITH', 'ysh.Order = o.id')
            ->leftJoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsUsersOrder', 'ysuo', 'WITH', 'ys.id = ysuo.YamatoSubs') // 定期購入内容を変更可能にする対応以前のデータの可能性もあるため、leftJoinにしている
            ->where('ysh.visible = :visible')
            ->andWhere('ys.visible = :visible')
            ->andWhere('o.Customer = :customer_id')
            ->andWhere("ysh.Order = ({$sub_query->getDql()})")
            ->setParameter('visible', true)
            ->setParameter('customer_id', $Customer->getId())
            ->orderBy('o.id', 'DESC');

        $result = $qb
            ->getQuery()
            ->getResult();

        if (empty($result)) {
            return [];
        }

        $yamatoSubsOrders = [];
        for ($i = 0; $i < count($result); $i += 3) {
            $yamatoSubsOrders[] = [
                'ys' => $result[$i],
                'o' => $result[$i + 1],
                'ysuo' => $result[$i + 2],
            ];
        }
        return $yamatoSubsOrders;
    }

    public function searchUsersActiveYamatoSubsList($Customer) {
        $qb = $this->createQueryBuilder('ys')
            ->select('ys')
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory', 'ysh', 'WITH', 'ys.id = ysh.YamatoSubs')
            ->innerjoin('Eccube\\Entity\\Order', 'o', 'WITH', 'ysh.Order = o.id')
            ->where('ysh.visible = :visible')
            ->andWhere('ys.visible = :visible')
            ->andWhere('ys.cancelled_date IS NULL')
            ->andWhere('o.Customer = :customer_id')
            ->setParameter('visible', true)
            ->setParameter('customer_id', $Customer->getId())
        ;
        return $qb
            ->getQuery()
            ->getResult();
    }

    public function searchStillContinuingYamatoSubsOrders() {
        $qb = $this->createQueryBuilder('ys')
            ->select('ys', 'o')
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory', 'ysh', 'WITH', 'ys.last_subs_history_id = ysh.id')
            ->innerjoin('Eccube\\Entity\\Order', 'o', 'WITH', 'ysh.Order = o.id')
            ->where('ys.visible = :visible')
            ->andWhere('ysh.visible = :visible')
            ->andWhere('ys.cancelled_date IS NULL')
            ->setParameter('visible', true)
            ->orderBy('o.id', 'ASC');

        $result = $qb
            ->getQuery()
            ->getResult();
        if (empty($result)) {
            return [];
        }

        $yso = [];
        for ($i = 0; $i < count($result); $i += 2) {
            $yso[] = [
                'ys' => $result[$i],
                'o' => $result[$i + 1],
            ];
        }
        return $yso;
    }

    public function findYamatoSubsFromOrder(\Eccube\Entity\Order $Order) {
        $qb = $this->createQueryBuilder('ys')
            ->select(
                'ys'
            )
            ->innerjoin('Plugin\\YamatoSubscription\\Entity\\YamatoSubsHistory', 'ysh', 'WITH', 'ys.id = ysh.YamatoSubs')
            ->where('ys.visible = :visible')
            ->andWhere('ysh.visible = :visible')
            ->andWhere('ysh.Order = :order_id')
            ->setParameter('visible', true)
            ->setParameter('order_id', $Order->getId());
        return $qb
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function register($Order, $subs_month_period, $credit_card_key) {
        $now = new \DateTime();
        $em = $this->getEntityManager();

        $YamatoSubs = new YamatoSubs();
        $YamatoSubs
            ->setLastSubsHistoryId(0)
            ->setSubsMonthPeriod($subs_month_period)
            ->setCreditCount(1)
            ->setDeliveryCount(1)
            ->setCreditCardKey($credit_card_key)
            ->setCreateDate($now)
            ->setUpdateDate($now)
            ->setVisible(true);
        $em->persist($YamatoSubs);
        $em->flush($YamatoSubs);

        $YamatoSubsHistory = new YamatoSubsHistory();
        $YamatoSubsHistory
            ->setYamatoSubs($YamatoSubs)
            ->setOrder($Order)
            ->setSubsMonthPeriod($subs_month_period)
            ->setDeliveryCount(1)
            ->setCreateDate($now)
            ->setUpdateDate($now)
            ->setVisible(true);
        $em->persist($YamatoSubsHistory);
        $em->flush($YamatoSubsHistory);

        $YamatoSubs
            ->setLastSubsHistoryId($YamatoSubsHistory->getId())
            ->setUpdateDate($now);
        $em->persist($YamatoSubs);
        $em->flush($YamatoSubs);

        $this->registerYamatoSubsUsersOrder($Order, $YamatoSubs);

        return $YamatoSubs;
    }

    public function updateSubsMonthPeriod($id, $subs_month_period) {
        $now = new \DateTime();

        $YamatoSubs = $this->findOneBy(['id' => $id, 'visible' => true]);
        $YamatoSubs
            ->setSubsMonthPeriod($subs_month_period)
            ->setUpdateDate($now);
        $this->getEntityManager()->persist($YamatoSubs);
        $this->getEntityManager()->flush($YamatoSubs);
        return $YamatoSubs;
    }

    public function updateCreditCardKey($id, $credit_card_key) {
        $now = new \DateTime();

        $YamatoSubs = $this->findOneBy(['id' => $id, 'visible' => true]);
        $YamatoSubs
            ->setCreditCardKey($credit_card_key)
            ->setUpdateDate($now);
        $this->getEntityManager()->persist($YamatoSubs);
        $this->getEntityManager()->flush($YamatoSubs);
        return $YamatoSubs;
    }

    public function registerYamatoSubsUsersOrderFromLastSubsOrder($YamatoSubs) {
        $lastSubsOrder = $this->yamatoSubsHistoryRepository
            ->findOneBy(['visible' => true, 'id' => $YamatoSubs->getLastSubsHistoryId()])
            ->getOrder();
        return $this->registerYamatoSubsUsersOrder($lastSubsOrder, $YamatoSubs);
    }

    public function registerYamatoSubsUsersOrder($Order, $YamatoSubs) {
        $YamatoSubsUsersOrder = $this->yamatoSubsUsersOrderRepository->register($Order, $YamatoSubs);
        $YamatoSubsUsersShippings = $this->yamatoSubsUsersShippingRepository->register($Order, $YamatoSubsUsersOrder);
        $YamatoSubsUsersOrderItems = $this->yamatoSubsUsersOrderItemRepository->register($Order, $YamatoSubsUsersOrder, $YamatoSubsUsersShippings);

        $YamatoSubsUsersReferralCodeOrder = $this->yamatoSubsUsersReferralCodeOrderRepository->register($Order, $YamatoSubsUsersOrder);

        // クーポンプラグインは1度しか割引しないので、次回以降の購入には適用しない
        //$YamatoSubsUsersCouponOrder = $this->yamatoSubsUsersCouponOrderRepository->register($Order, $YamatoSubsUsersOrder);
        $em = $this->getEntityManager();

        // 手動でクーポン割引分の金額を修正
        $CouponItem = $YamatoSubsUsersOrderItems->filter(function($YamatoSubsUsersOrderItem) {
            return strpos($YamatoSubsUsersOrderItem->getProcessorName(), 'CouponProcessor') !== false;
        })->first();
        if ($CouponItem) {
            $YamatoSubsUsersOrder->setDiscount($YamatoSubsUsersOrder->getDiscount() - abs($CouponItem->getPriceIncTax()));
            $YamatoSubsUsersOrder->setTotal($YamatoSubsUsersOrder->getTotal() + abs($CouponItem->getPriceIncTax()));
            $YamatoSubsUsersOrder->setPaymentTotal($YamatoSubsUsersOrder->getPaymentTotal() + abs($CouponItem->getPriceIncTax()));
            $YamatoSubsUsersOrderItems->removeElement($CouponItem);
            $em->remove($CouponItem);
        }

        // クーポン割引のメール文面があれば、それも消しておく
        $message = $YamatoSubsUsersOrder->getCompleteMailMessage();
        if ($message) {
            $snippet  = '.*'.PHP_EOL;
            $snippet .= '　クーポン情報.*'.PHP_EOL;
            $snippet .= '.*'.PHP_EOL;
            $snippet .= '.*'.PHP_EOL;
            $snippet .= 'クーポンコード:.*'.PHP_EOL;
            $message = preg_replace('/'.$snippet.'/m', '', $message);
            $YamatoSubsUsersOrder->setCompleteMailMessage($message ? trim($message) : null);
        }

        $em->flush();

        // associationでなぜか取得できないので、直接セットする
        // （find()し直してからgetYamatoSubsUsersShippings()してもダメだった。。。）
        $YamatoSubsUsersOrder->setYamatoSubsUsersShippings($YamatoSubsUsersShippings);
        $YamatoSubsUsersOrder->setYamatoSubsUsersOrderItems($YamatoSubsUsersOrderItems);

        return $YamatoSubsUsersOrder;
    }
}
