<?php

return [
    'module' => [
        'path' => '/{module}',
        'requirements' => [
            'module' => '%activeModules%',
        ],
        'defaults' => [
            'module' => '%defaultModule%',
        ],
        'routes' => [
            'scope' => [
                'path' => '/{scope}',
                'requirements' => [
                    'scope' => '%requiredScopes%',
                ],
                'routes' => [
                    'controller' => [

                    ]
                ]
            ],
            'public' => [

            ],
        ],
    ],
    'two-parts' => [
        'path' => '/{module}/{action}',
        'requirements' => [
            'module' => '(site|blog|shop)',
            'action' => '(index|edit|view)',
        ],
        'defaults' => [
            'module' => 'site',
            'action' => 'index',
        ]
    ],
    'default' => [
        'path' => '/{path}',
        'requirements' => [
            'path' => '\w+'
        ]
    ],
    'template' => [
        'path' => '/{path}',
        'requirements' => [
            'path' => '.*'
        ]
    ]
];