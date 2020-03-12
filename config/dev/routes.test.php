<?php

return [
    'site' => [
        'path' => '/{module}',
        'requirements' => [
            'module' => '(site|blog|shop)'
        ],
        'defaults' => [
            'module' => 'site',
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