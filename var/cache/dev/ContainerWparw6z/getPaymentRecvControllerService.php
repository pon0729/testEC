<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\YamatoPayment4\Controller\PaymentRecvController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/app/Plugin/YamatoPayment4/Controller/PaymentRecvController.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';

$a = ${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'};

$this->services['Plugin\\YamatoPayment4\\Controller\\PaymentRecvController'] = $instance = new \Plugin\YamatoPayment4\Controller\PaymentRecvController(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'}, $a, ${($_ = isset($this->services['Eccube\\Service\\PurchaseFlow\\PurchaseFlow']) ? $this->services['Eccube\\Service\\PurchaseFlow\\PurchaseFlow'] : ($this->services['Eccube\\Service\\PurchaseFlow\\PurchaseFlow'] = new \Eccube\Service\PurchaseFlow\PurchaseFlow())) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\BaseInfoRepository']) ? $this->services['Eccube\\Repository\\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CartRepository']) ? $this->services['Eccube\\Repository\\CartRepository'] : $this->getCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\Master\\OrderStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\OrderStatusRepository'] : $this->getOrderStatusRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\OrderRepository']) ? $this->services['Eccube\\Repository\\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\ConfigRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\ConfigRepository'] : $this->getConfigRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\YamatoOrderRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\YamatoOrderRepository'] : $this->getYamatoOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Repository\\YamatoPaymentMethodRepository']) ? $this->services['Plugin\\YamatoPayment4\\Repository\\YamatoPaymentMethodRepository'] : $this->getYamatoPaymentMethodRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\YamatoPayment4\\Util\\PluginUtil']) ? $this->services['Plugin\\YamatoPayment4\\Util\\PluginUtil'] : $this->load('getPluginUtilService.php')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});

$instance->setEccubeConfig($a);
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
