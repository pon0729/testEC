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

use Eccube\Entity\Master\OrderStatus;
use Eccube\Repository\AbstractRepository;
use Plugin\ReferralCode\Entity\ReferralCodeOrder;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * Class ReferralCodeOrderRepository.
 */
class ReferralCodeOrderRepository extends AbstractRepository
{
    /**
     * constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReferralCodeOrder::class);
    }

    /**
     * 会員または非会員が既に紹介コードを利用しているか検索
     * 会員の場合、会員IDで非会員の場合、メールアドレスで検索.
     *
     * @param string $referral_code
     * @param string $param
     *
     * @return array
     */
    public function findUseReferralCode($referral_code, $param)
    {
        $userId = null;
        $email = null;

        if (is_numeric($param)) {
            $userId = $param;
        } else {
            $email = $param;
        }

        $qb = $this->createQueryBuilder('rco')
            ->andWhere('rco.referral_code = :referral_code')
            ->andWhere('rco.order_date IS NOT NULL')
            ->andWhere('rco.user_id = :user_id OR rco.email = :email')
            ->setParameter('referral_code', $referral_code)
            ->setParameter('user_id', $userId)
            ->setParameter('email', $email);
        $query = $qb->getQuery();
        $result = $query->getResult();

        return $result;
    }

    /**
     * 紹介コード受注情報を取得する.
     *
     * @param string $preOrderId
     *
     * @return ReferralCodeOrder
     */
    public function getReferralCodeOrder($preOrderId)
    {
        $ReferralCodeOrder = $this->findOneBy([
            'pre_order_id' => $preOrderId,
        ]);

        return $ReferralCodeOrder;
    }

    /**
     * 注文情報に紐づく紹介コードの一覧を表示
     *
     * @return $result
     */
    public function findAllReferralCodeOrders()
    {
        $qb = $this->getFindAllReferralCodeOrdersQueryBuilder();
        $result = $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return $result;
    }



    private function getFindAllReferralCodeOrdersQueryBuilder() {
        $qb = $this->createQueryBuilder('rco');
        $qb = $qb
            ->select(
                'o.order_no',
                'o.subtotal',
                'o.discount',
                'o.delivery_fee_total',
                'o.charge',
                'o.tax',
                'o.payment_total',
                'o.order_date',
                'o.update_date',
                'p.id as product_id',
                'oi.product_name',
                'oi.product_code',
                'oi.price',
                'oi.quantity',
                'oi.tax_rate',
                'rco.referral_code',
                'rco.referral_code_name',
                'os.name'
            )
            ->leftJoin('Eccube\\Entity\\Order', 'o', 'WITH', 'rco.order_id = o.id')
            ->leftJoin('Eccube\\Entity\\OrderItem', 'oi', 'WITH', 'oi.Order = o.id')
            ->leftJoin('Eccube\\Entity\\Product', 'p', 'WITH', 'oi.Product = p.id')
            ->leftJoin('Eccube\\Entity\\Master\\OrderStatus', 'os', 'WITH', 'o.OrderStatus = os.id')
            ->where('rco.visible = :visible')
            ->andWhere($qb->expr()->notIn('o.OrderStatus', [
                OrderStatus::IN_PROGRESS,
                OrderStatus::PENDING,
                OrderStatus::PROCESSING,
            ]))
            ->setParameter('visible', true)
            ->orderBy('o.id', 'DESC')
            ->addOrderBy('oi.OrderItemType', 'ASC')
            ->addOrderBy('oi.Product', 'ASC')
        ;

        return $qb;
    }
}
