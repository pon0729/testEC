<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Api\EventListener\UserResolveListener' shared service.

include_once $this->targetDirs[3].'/app/Plugin/Api/EventListener/UserResolveListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/UserPasswordEncoderInterface.php';
include_once $this->targetDirs[3].'/app/Plugin/Api/Security/Core/Encoder/UserPasswordEncoder.php';

return $this->services['Plugin\\Api\\EventListener\\UserResolveListener'] = new \Plugin\Api\EventListener\UserResolveListener(${($_ = isset($this->services['Eccube\\Security\\Core\\User\\MemberProvider']) ? $this->services['Eccube\\Security\\Core\\User\\MemberProvider'] : $this->load('getMemberProviderService.php')) && false ?: '_'}, new \Plugin\Api\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['Eccube\\Security\\Core\\Encoder\\PasswordEncoder']) ? $this->services['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] : $this->load('getPasswordEncoderService.php')) && false ?: '_'}));
