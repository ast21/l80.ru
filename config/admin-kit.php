<?php

use AdminKit\Core\Containers\UserSection;

// config for AdminKit/Core
return [
    'locales' => ['ru', 'en', 'kk'],

    'containers' => [
        \App\Containers\User\Providers\MainServiceProvider::class,
        \App\Containers\AdminUser\Providers\MainServiceProvider::class,

        UserSection\User\Providers\MainServiceProvider::class,

        \App\Containers\PSG\Providers\MainServiceProvider::class,
    ],
];
