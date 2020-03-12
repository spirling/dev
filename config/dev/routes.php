<?php

return [
    'locale' => [
        'conditions' => [
            'method' => 'get',
        ],
        'path' => '/{locale}',
        'requirements' => [
            '_locale' => '(en|ua)'
        ],
        'defaults' => [
            '_locale' => '%locale%',
            'module' => 'site',
            'controller' => 'main',
            'action' => 'index'
        ],
        'routes' => [
            'site' => [
                'path' => '/{module}',
                'requirements' => [
                    'module' => '%active_modules%'
                ],
                'defaults' => [
                    'module' => 'site',
                ]
            ]
        ]
    ],
    'template' => [
        'path' => '/{path}',

    ]
];