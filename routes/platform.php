<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

Route::screen('interpreter', \App\Orchid\Screens\InterpreterScreen::class)->name('platform.interpreter');

Route::screen('choices', \App\Orchid\Screens\ChoiceListScreen::class)->name('platform.choices.list');
Route::screen('choice/{choice?}', \App\Orchid\Screens\ChoiceEditScreen::class)->name('platform.choices.edit');

Route::screen('quotes', \App\Orchid\Screens\Quote\QuoteListScreen::class)->name('platform.quotes.list');
Route::screen('quote/{quote?}', \App\Orchid\Screens\Quote\QuoteEditScreen::class)->name('platform.quotes.edit');

Route::screen('main', \App\Orchid\Screens\MainScreen::class)->name('platform.main');
