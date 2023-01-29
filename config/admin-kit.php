<?php

// config for AdminKit/Core
return [
    'locales' => ['ru', 'en'],

    'packages' => [
        'directories' => [
            // https://github.com/admin-kit/directories/blob/1.x/config/directories.php
            'models' => [
                [
                    'name' => 'Gender',
                    'title' => 'Gender',
                ],
            ],
            'properties' => [
                [
                    'key' => 'color',
                    'title' => 'Color',
                    'required' => false,
                ]
            ],
        ],
    ],
];
