<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\DeliveryPlus4\DeliveryPlusEvent' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/DeliveryPlus4/DeliveryPlusEvent.php';

return $this->services['Plugin\\DeliveryPlus4\\DeliveryPlusEvent'] = new \Plugin\DeliveryPlus4\DeliveryPlusEvent(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ProductClassRepository']) ? $this->services['Eccube\\Repository\\ProductClassRepository'] : $this->getProductClassRepositoryService()) && false ?: '_'});
