<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\League\Repository\AuthCodeRepository' shared service.

include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Repositories/RepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Repositories/AuthCodeRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/League/Repository/AuthCodeRepository.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Converter/ScopeConverterInterface.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Converter/ScopeConverter.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AuthCodeRepository'] = new \Trikoder\Bundle\OAuth2Bundle\League\Repository\AuthCodeRepository(${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\AuthorizationCodeManager']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\AuthorizationCodeManager'] : $this->load('getAuthorizationCodeManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager'] : $this->load('getClientManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] : ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] = new \Trikoder\Bundle\OAuth2Bundle\Converter\ScopeConverter())) && false ?: '_'});
