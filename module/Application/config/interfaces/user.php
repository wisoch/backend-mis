<?php

namespace Application\Controller;

return [
    // 账号
    'user.account.register' => [
        'controller' => User\AccountController::class,
        'action'     => 'register',
    ],
    'user.account.register' => [
        'controller' => User\AccountController::class,
        'action'     => 'register',
    ],

    // 收货地址
    'user.address.create' => [
        'controller' => User\AddressController::class,
        'action'     => 'create',
    ],
    'user.address.delete' => [
        'controller' => User\AddressController::class,
        'action'     => 'update',
    ],
    'user.address.update' => [
        'controller' => User\AddressController::class,
        'action'     => 'update',
    ],
    'user.address.info' => [
        'controller' => User\AddressController::class,
        'action'     => 'info',
    ],
    'user.address.select' => [
        'controller' => User\AddressController::class,
        'action'     => 'select',
    ],
    'user.address.query' => [
        'controller' => User\AddressController::class,
        'action'     => 'query',
    ],
];