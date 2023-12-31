<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PurchaseFlow\Processor\DeliverySettingValidator' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/ItemValidator.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/Processor/DeliverySettingValidator.php';

return $this->services['Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'] = new \Eccube\Service\PurchaseFlow\Processor\DeliverySettingValidator(${($_ = isset($this->services['Eccube\\Repository\\DeliveryRepository']) ? $this->services['Eccube\\Repository\\DeliveryRepository'] : $this->getDeliveryRepositoryService()) && false ?: '_'});
