<?php

use Haridarshan\Laravel\NwidartModules\Commands;
use Haridarshan\Laravel\NwidartModules\Middleware\ApiVersion;

return [

    /*
    |--------------------------------------------------------------------------
    | Middleware Aliases for Route and Groups
    |--------------------------------------------------------------------------
    |
    | Route and groups middleware aliases
    |
    */
    'middlewareAliases' => [
        'api.version' => ApiVersion::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. If for example you don't use some commands provided
    | you can simply comment them out.
    |
    */
    'commands' => [
        'register' => [
            Commands\BootstrapMakeCommand::class,
            Commands\RouteProviderUpdateCommand::class,
            Commands\ModuleMakeWithVersion::class,
        ],
        'override' => [

        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Add/Update module stubs.
    |
    */
    'stubs' => [
        'enabled' => false,
        'path' => base_path('vendor/haridarshan/laravel-modules-composer-deps/src/Commands/stubs'),
        'files' => [
            'bootstrap' => 'bootstrap.php',
        ],
        'replacements' => [],
        'gitkeep' => true,
    ],

    'paths' => [
        'generator' => [
            'provider' => ['path' => 'Providers', 'generate' => true],
        ],
    ],
];
