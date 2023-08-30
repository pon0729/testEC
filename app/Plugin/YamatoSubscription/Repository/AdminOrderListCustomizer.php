<?php

namespace Plugin\YamatoSubscription\Repository;

use Eccube\Doctrine\Query\JoinClause;
use Eccube\Doctrine\Query\WhereClause;
use Eccube\Doctrine\Query\JoinCustomizer;
use Eccube\Repository\QueryKey;

class AdminOrderListCustomizer extends JoinCustomizer
{
    /**
     * YamatoSubsHistoryをLeftJoin
     *
     * @param array $params
     * @param $queryKey
     * @return JoinClause[]
     */	
    public function createStatements($params, $queryKey)
    {
		$Obj = JoinClause::leftJoin('o.YamatoSubsHistory', 'ysh');
        return [$Obj];
    }

    /**
     * OrderRepository::getQueryBuilderBySearchDataForAdmin に適用する.
     * @return string
     * @see \Eccube\Repository\OrderRepository::getQueryBuilderBySearchDataForAdmin()
	 * OrderRepository.getQueryBuilderBySearchDataForAdmin
     * @see QueryKey
     */
    public function getQueryKey()
    {
        return QueryKey::ORDER_SEARCH_ADMIN;
    }
}