<?php

use Illuminate\Support\Facades\Route;
use Modules\GenderParty\Http\Controllers\VoteController;

Route::get('votes', [VoteController::class, 'index']);
Route::post('votes', [VoteController::class, 'store']);
