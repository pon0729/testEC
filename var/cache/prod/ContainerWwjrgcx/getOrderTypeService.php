<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Admin\OrderType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Eccube/Form/Type/Admin/OrderType.php';

return $this->services['Eccube\\Form\\Type\\Admin\\OrderType'] = new \Eccube\Form\Type\Admin\OrderType(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\OrderStateMachine']) ? $this->services['Eccube\\Service\\OrderStateMachine'] : $this->load('getOrderStateMachineService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderStatusRepository'] : $this->getOrderStatusRepositoryService()) && false ?: '_'});
