<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\ApiTokenAuthenticator' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/AuthenticatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/AbstractGuardAuthenticator.php';
include_once $this->targetDirs[3].'/src/Security/ApiTokenAuthenticator.php';

return $this->privates['App\Security\ApiTokenAuthenticator'] = new \App\Security\ApiTokenAuthenticator(($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php')));
