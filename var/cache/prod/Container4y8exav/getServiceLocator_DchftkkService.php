<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.dchftkk' shared service.

return $this->services['service_locator.dchftkk'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['fs' => function () {
    return ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'};
}]);
