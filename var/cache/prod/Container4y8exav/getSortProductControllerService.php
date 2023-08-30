<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\SortProduct4Plus\Controller\Admin\SortProductController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/app/Plugin/SortProduct4Plus/Controller/Admin/SortProductController.php';
include_once $this->targetDirs[3].'/app/Plugin/SortProduct4Plus/Service/SortService.php';

$a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};
$b = ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'};

$this->services['Plugin\\SortProduct4Plus\\Controller\\Admin\\SortProductController'] = $instance = new \Plugin\SortProduct4Plus\Controller\Admin\SortProductController(new \Plugin\SortProduct4Plus\Service\SortService($a, ${($_ = isset($this->services['Plugin\\SortProduct4Plus\\Repository\\SortProductRepository']) ? $this->services['Plugin\\SortProduct4Plus\\Repository\\SortProductRepository'] : $this->load('getSortProductRepositoryService.php')) && false ?: '_'}, $b, $this));

$instance->setEccubeConfig($b);
$instance->setEntityManager($a);
$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

return $instance;
