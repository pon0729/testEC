<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\ReferralCode\Form\Type\Admin\ReferralCodeDetailType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/app/Plugin/ReferralCode/Form/Type/Admin/ReferralCodeDetailType.php';

return $this->services['Plugin\\ReferralCode\\Form\\Type\\Admin\\ReferralCodeDetailType'] = new \Plugin\ReferralCode\Form\Type\Admin\ReferralCodeDetailType(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
