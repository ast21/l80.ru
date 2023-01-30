<?php

use Illuminate\Support\Facades\Route;
use Modules\GenderParty\Http\Controllers\GenderController;
use Modules\GenderParty\Http\Controllers\VoteController;

Route::get('votes', [VoteController::class, 'index']);
Route::post('votes', [VoteController::class, 'store']);

Route::get('genders', [GenderController::class, 'index']);
