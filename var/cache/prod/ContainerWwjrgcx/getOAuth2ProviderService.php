<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\Security\Authentication\Provider\OAuth2Provider' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Security/Authentication/Provider/OAuth2Provider.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Security/Authentication/Token/OAuth2TokenFactory.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\Authentication\\Provider\\OAuth2Provider'] = new \Trikoder\Bundle\OAuth2Bundle\Security\Authentication\Provider\OAuth2Provider('', ${($_ = isset($this->services['League\\OAuth2\\Server\\ResourceServer']) ? $this->services['League\\OAuth2\\Server\\ResourceServer'] : $this->load('getResourceServerService.php')) && false ?: '_'}, ${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\Authentication\\Token\\OAuth2TokenFactory']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\Authentication\\Token\\OAuth2TokenFactory'] : ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Security\\Authentication\\Token\\OAuth2TokenFactory'] = new \Trikoder\Bundle\OAuth2Bundle\Security\Authentication\Token\OAuth2TokenFactory('ROLE_OAUTH2_'))) && false ?: '_'});
