<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Api\GraphQL\Types' shared service.

include_once $this->targetDirs[3].'/app/Plugin/Api/GraphQL/Types.php';

if ($lazyLoad) {
    return $this->services['Plugin\\Api\\GraphQL\\Types'] = $this->createProxy('Types_eee6714', function () {
        return \Types_eee6714::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getTypesService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

$instance = new \Plugin\Api\GraphQL\Types(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});

$instance->addAllowList(${($_ = isset($this->services['core.api.allow_list']) ? $this->services['core.api.allow_list'] : $this->load('getCore_Api_AllowListService.php')) && false ?: '_'});
$instance->addAllowList(${($_ = isset($this->services['deliveryplus4.api.allow_list']) ? $this->services['deliveryplus4.api.allow_list'] : $this->load('getDeliveryplus4_Api_AllowListService.php')) && false ?: '_'});

return $instance;
