<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\GmoPaymentGateway4\Repository\GmoConfigRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/GmoPaymentGateway4/Repository/GmoConfigRepository.php';

return $this->services['Plugin\\GmoPaymentGateway4\\Repository\\GmoConfigRepository'] = new \Plugin\GmoPaymentGateway4\Repository\GmoConfigRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
