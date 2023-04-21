<?php

use App\Containers\ChoiceSection\Choice\Models\Choice;
use App\Containers\ChoiceSection\Choice\UI\Platform\Screens\ChoiceEditScreen;
use App\Containers\ChoiceSection\Choice\UI\Platform\Screens\ChoiceListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

Route::prefix('/choices')->group(function () {
    Route::screen('/', ChoiceListScreen::class)
        ->name(Choice::ROUTE_LIST)
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent('platform.index')
                ->push(__(Choice::NAME_PLURAL), route(Choice::ROUTE_LIST));
        });
    Route::screen('/create', ChoiceEditScreen::class)
        ->name(Choice::ROUTE_CREATE)
        ->breadcrumbs(function (Trail $trail) {
            return $trail
                ->parent(Choice::ROUTE_LIST)
                ->push(__('Create'), route(Choice::ROUTE_CREATE));
        });
    Route::screen('/{item}/edit', ChoiceEditScreen::class)
        ->name(Choice::ROUTE_EDIT)
        ->breadcrumbs(function (Trail $trail, $item) {
            return $trail
                ->parent(Choice::ROUTE_LIST)
                ->push($item->title, route(Choice::ROUTE_EDIT, $item));
        });
});
