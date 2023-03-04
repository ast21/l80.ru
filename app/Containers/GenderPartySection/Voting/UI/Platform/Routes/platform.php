<?php

use App\Containers\GenderPartySection\Voting\Models\Vote;
use App\Containers\GenderPartySection\Voting\UI\Platform\Screens\VoteEditScreen;
use App\Containers\GenderPartySection\Voting\UI\Platform\Screens\VoteListScreen;
use Illuminate\Support\Facades\Route;

Route::prefix('gp')->group(function () {
    Route::prefix('votes')->group(function () {
        Route::screen('/', VoteListScreen::class)->name(Vote::ROUTE_LIST);
        Route::screen('/create', VoteEditScreen::class)->name(Vote::ROUTE_CREATE);
        Route::screen('/{action}/edit', VoteEditScreen::class)->name(Vote::ROUTE_EDIT);
    });
});
