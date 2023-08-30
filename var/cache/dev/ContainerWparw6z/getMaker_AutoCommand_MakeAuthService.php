<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_auth' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/MakerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Maker/MakeAuthenticator.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

$a = ${($_ = isset($this->services['maker.file_manager']) ? $this->services['maker.file_manager'] : $this->load('getMaker_FileManagerService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['maker.generator']) ? $this->services['maker.generator'] : $this->load('getMaker_GeneratorService.php')) && false ?: '_'};

$this->services['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ${($_ = isset($this->services['maker.security_config_updater']) ? $this->services['maker.security_config_updater'] : ($this->services['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())) && false ?: '_'}, $b, ${($_ = isset($this->services['maker.doctrine_helper']) ? $this->services['maker.doctrine_helper'] : $this->load('getMaker_DoctrineHelperService.php')) && false ?: '_'}), $a, $b);

$instance->setDescription('Creates a Guard authenticator of different flavors');
$instance->setName('make:auth');

return $instance;
