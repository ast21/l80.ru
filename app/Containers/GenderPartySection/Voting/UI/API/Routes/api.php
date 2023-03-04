<?php

use App\Containers\GenderPartySection\Voting\UI\API\Controllers\GenderController;
use App\Containers\GenderPartySection\Voting\UI\API\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::get('votes', [VoteController::class, 'index']);
Route::post('votes', [VoteController::class, 'store']);

Route::get('genders', [GenderController::class, 'index']);
