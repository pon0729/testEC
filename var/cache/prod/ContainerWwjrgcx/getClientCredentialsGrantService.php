<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'League\OAuth2\Server\Grant\ClientCredentialsGrant' shared service.

include_once $this->targetDirs[3].'/vendor/league/event/src/EmitterAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Grant/GrantTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/league/event/src/EmitterAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/CryptTrait.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Grant/AbstractGrant.php';
include_once $this->targetDirs[3].'/vendor/league/oauth2-server/src/Grant/ClientCredentialsGrant.php';

return $this->services['League\\OAuth2\\Server\\Grant\\ClientCredentialsGrant'] = new \League\OAuth2\Server\Grant\ClientCredentialsGrant();
