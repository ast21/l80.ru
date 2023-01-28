<?php

use Illuminate\Support\Facades\Route;
use Modules\GenderParty\Http\Controllers\VoteController;

Route::post('votes', [VoteController::class, 'store']);
