<?php

use App\Containers\Achievements\UI\API\Controllers\AchievementController;
use Illuminate\Support\Facades\Route;

Route::prefix('achievements')->group(function () {
    Route::get('/', [AchievementController::class, 'index']);
    Route::post('/', [AchievementController::class, 'store']);
    Route::get('/{id}', [AchievementController::class, 'show']);
    Route::put('/{id}', [AchievementController::class, 'update']);
    Route::delete('/{id}', [AchievementController::class, 'destroy']);
});
