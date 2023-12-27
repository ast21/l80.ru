<?php

use App\Containers\Achievement\UI\WEB\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::domain(config('achievements.domain'))->prefix(config('achievements.prefix'))->group(function () {
    Route::get('/', [MainController::class, 'index']);
});
