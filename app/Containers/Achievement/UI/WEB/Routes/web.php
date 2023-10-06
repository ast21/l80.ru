<?php

use App\Containers\Achievement\UI\WEB\Controllers\MainController;
use Illuminate\Support\Facades\Route;

$domain = app()->isProduction() ? 'achievements.l80.ru' : 'achievements.localhost';

Route::domain($domain)->group(function () {
    Route::get('/', [MainController::class, 'index']);
});
