<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.generator' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Generator.php';
include_once $this->targetDirs[3].'/vendor/symfony/maker-bundle/src/Util/PhpCompatUtil.php';

$a = ${($_ = isset($this->services['maker.file_manager']) ? $this->services['maker.file_manager'] : $this->load('getMaker_FileManagerService.php')) && false ?: '_'};

return $this->services['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator($a, 'App', new \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil($a));
