<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.eh3g3s3' shared service.

return $this->services['service_locator.eh3g3s3'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['paginator' => function () {
    return ${($_ = isset($this->services['knp_paginator']) ? $this->services['knp_paginator'] : $this->load('getKnpPaginatorService.php')) && false ?: '_'};
}]);
