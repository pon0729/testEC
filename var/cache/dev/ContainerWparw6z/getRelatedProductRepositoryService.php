<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\RelatedProduct4\Repository\RelatedProductRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/RelatedProduct4/Repository/RelatedProductRepository.php';

return $this->services['Plugin\\RelatedProduct4\\Repository\\RelatedProductRepository'] = new \Plugin\RelatedProduct4\Repository\RelatedProductRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
