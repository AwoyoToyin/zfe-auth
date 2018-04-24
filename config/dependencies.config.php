<?php

namespace Zfe\Auth;

use Zend\ServiceManager\AbstractFactory\ConfigAbstractFactory;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Expressive\Template\TemplateRendererInterface;
use Doctrine\Common\Cache\Cache;

return [
    'dependencies' => [
        'invokables' => [
        ],
        'factories'  => [
            // Services
            Service\UserService::class => ConfigAbstractFactory::class,

            // Providers
            Provider\UserProvider::class => ConfigAbstractFactory::class,
        ],
    ],

    ConfigAbstractFactory::class => [
        // Services
        Service\UserService::class => [Provider\UserProvider::class],

        // Providers
        Provider\UserProvider::class => ['doctrine.entity_manager.orm_default'],
    ]
];
