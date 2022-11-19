<?php

use Illuminate\Support\Facades\Route;
use Modules\GiftFinder\Orchid\Screens\GiftEditScreen;
use Modules\GiftFinder\Orchid\Screens\GiftListScreen;
use Modules\GiftFinder\Orchid\Screens\HobbyEditScreen;
use Modules\GiftFinder\Orchid\Screens\HobbyListScreen;
use Modules\GiftFinder\Orchid\Screens\ProductEditScreen;
use Modules\GiftFinder\Orchid\Screens\ProductListScreen;
use Modules\GiftFinder\Orchid\Screens\ShopEditScreen;
use Modules\GiftFinder\Orchid\Screens\ShopListScreen;

Route::group(['prefix' => 'gf'], function () {
    Route::group(['prefix' => 'gifts'], function () {
        Route::screen('/', GiftListScreen::class)->name('platform.gf.gifts.list');
        Route::screen('/create', GiftEditScreen::class)->name('platform.gf.gifts.create');
        Route::screen('/{action}/edit', GiftEditScreen::class)->name('platform.gf.gifts.edit');
    });
    Route::group(['prefix' => 'hobbies'], function () {
        Route::screen('/', HobbyListScreen::class)->name('platform.gf.hobbies.list');
        Route::screen('/create', HobbyEditScreen::class)->name('platform.gf.hobbies.create');
        Route::screen('/{action}/edit', HobbyEditScreen::class)->name('platform.gf.hobbies.edit');
    });
    Route::group(['prefix' => 'shops'], function () {
        Route::screen('/', ShopListScreen::class)->name('platform.gf.shops.list');
        Route::screen('/create', ShopEditScreen::class)->name('platform.gf.shops.create');
        Route::screen('/{action}/edit', ShopEditScreen::class)->name('platform.gf.shops.edit');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::screen('/', ProductListScreen::class)->name('platform.gf.products.list');
        Route::screen('/create', ProductEditScreen::class)->name('platform.gf.products.create');
        Route::screen('/{action}/edit', ProductEditScreen::class)->name('platform.gf.products.edit');
    });
});
