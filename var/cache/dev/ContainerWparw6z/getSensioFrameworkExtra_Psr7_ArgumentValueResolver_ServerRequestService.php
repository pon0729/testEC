<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.psr7.argument_value_resolver.server_request' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php';

return $this->services['sensio_framework_extra.psr7.argument_value_resolver.server_request'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentValueResolver\Psr7ServerRequestResolver(${($_ = isset($this->services['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory']) ? $this->services['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] : $this->load('getPsrHttpFactoryService.php')) && false ?: '_'});
