<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.v_q6gfB' shared service.

return $this->privates['.service_locator.v_q6gfB'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['em' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}]);
