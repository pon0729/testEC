<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\Command\DeleteClientCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/trikoder/oauth2-bundle/Command/DeleteClientCommand.php';

$this->services['Trikoder\\Bundle\\OAuth2Bundle\\Command\\DeleteClientCommand'] = $instance = new \Trikoder\Bundle\OAuth2Bundle\Command\DeleteClientCommand(${($_ = isset($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager']) ? $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\ClientManager'] : $this->load('getClientManagerService.php')) && false ?: '_'});

$instance->setName('trikoder:oauth2:delete-client');

return $instance;
