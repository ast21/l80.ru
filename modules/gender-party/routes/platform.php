<?php

use Illuminate\Support\Facades\Route;
use Modules\GenderParty\Models\Vote;
use Modules\GenderParty\Orchid\Screens\VoteEditScreen;
use Modules\GenderParty\Orchid\Screens\VoteListScreen;

Route::prefix('gp')->group(function () {
    Route::prefix('votes')->group(function () {
        Route::screen('/', VoteListScreen::class)->name(Vote::ROUTE_LIST);
        Route::screen('/create', VoteEditScreen::class)->name(Vote::ROUTE_CREATE);
        Route::screen('/{action}/edit', VoteEditScreen::class)->name(Vote::ROUTE_EDIT);
    });
});
