<?php

return [
    'modules' => require __DIR__ . '/modules.config.php',

    'listeners' => ['HttpListener'],

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],

        'config_cache_enabled' => ('product' == $GLOBALS['environment']),

        'config_cache_key' => 'application.config.cache',

        'module_map_cache_enabled' => ('product' == $GLOBALS['environment']),

        'module_map_cache_key' => 'application.module.cache',

        'cache_dir' => 'data/cache/',
    ],
];
