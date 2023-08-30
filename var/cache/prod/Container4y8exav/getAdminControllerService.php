<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\AdminController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/Admin/AdminController.php';

$this->services['Eccube\\Controller\\Admin\\AdminController'] = $instance = new \Eccube\Controller\Admin\AdminController(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication_utils']) ? $this->services['security.authentication_utils'] : $this->load('getSecurity_AuthenticationUtilsService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\MemberRepository']) ? $this->services['Eccube\\Repository\\MemberRepository'] : $this->load('getMemberRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\OrderRepository']) ? $this->services['Eccube\\Repository\\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderStatusRepository'] : $this->getOrderStatusRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CustomerRepository']) ? $this->services['Eccube\\Repository\\CustomerRepository'] : $this->load('getCustomerRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\ProductRepository']) ? $this->services['Eccube\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\PluginApiService']) ? $this->services['Eccube\\Service\\PluginApiService'] : $this->load('getPluginApiServiceService.php')) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

return $instance;
