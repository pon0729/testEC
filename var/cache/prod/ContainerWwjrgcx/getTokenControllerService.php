<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Trikoder\Bundle\OAuth2Bundle\Controller\TokenController' shared service.

include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Controller/TokenController.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController'] = new \Trikoder\Bundle\OAuth2Bundle\Controller\TokenController(${($_ = isset($this->services['League\\OAuth2\\Server\\AuthorizationServer']) ? $this->services['League\\OAuth2\\Server\\AuthorizationServer'] : $this->load('getAuthorizationServerService.php')) && false ?: '_'});
