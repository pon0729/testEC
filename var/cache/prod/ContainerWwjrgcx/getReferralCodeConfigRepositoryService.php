<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\ReferralCode\Repository\ReferralCodeConfigRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/ReferralCode/Repository/ReferralCodeConfigRepository.php';

return $this->services['Plugin\\ReferralCode\\Repository\\ReferralCodeConfigRepository'] = new \Plugin\ReferralCode\Repository\ReferralCodeConfigRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
