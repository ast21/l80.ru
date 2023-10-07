<?php

use App\Containers\Achievement\UI\WEB\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::domain(config('achievements.domain'))->group(function () {
    Route::get('/', [MainController::class, 'index']);
});
