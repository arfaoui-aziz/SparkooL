<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.

$this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_9c7399f20938e59e990bb3f9187dfcd662e174f443625c34c785bb02d27509b5');

return $instance;