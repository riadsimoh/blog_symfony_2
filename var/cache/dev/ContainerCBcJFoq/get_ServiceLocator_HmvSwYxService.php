<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HmvSwYx' shared service.

return $this->privates['.service_locator.HmvSwYx'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['loger' => function () {
    return ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService());
}]);
