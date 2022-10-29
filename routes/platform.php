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

Route::group(['prefix' => 'quotes'], function () {
    Route::screen('/', \App\Orchid\Screens\Quote\QuoteListScreen::class)->name('platform.quotes.list');
    Route::screen('/create', \App\Orchid\Screens\Quote\QuoteEditScreen::class)->name('platform.quotes.create');
    Route::screen('/{quote}/edit', \App\Orchid\Screens\Quote\QuoteEditScreen::class)->name('platform.quotes.edit');
});
Route::group(['prefix' => 'faqs'], function () {
    Route::screen('/', \App\Orchid\Screens\FAQ\FAQListScreen::class)->name('platform.faqs.list');
    Route::screen('/create', \App\Orchid\Screens\FAQ\FAQEditScreen::class)->name('platform.faqs.create');
    Route::screen('/{faq}/edit', \App\Orchid\Screens\FAQ\FAQEditScreen::class)->name('platform.faqs.edit');
});
Route::group(['prefix' => 'goals'], function () {
    Route::screen('/', \App\Orchid\Screens\Goal\GoalListScreen::class)->name('platform.goals.list');
    Route::screen('/create', \App\Orchid\Screens\Goal\GoalEditScreen::class)->name('platform.goals.create');
    Route::screen('/{goal}/edit', \App\Orchid\Screens\Goal\GoalEditScreen::class)->name('platform.goals.edit');
});
Route::group(['prefix' => 'tasks'], function () {
    Route::screen('/', \App\Orchid\Screens\Task\TaskListScreen::class)->name('platform.tasks.list');
    Route::screen('/create', \App\Orchid\Screens\Task\TaskEditScreen::class)->name('platform.tasks.create');
    Route::screen('/{task}/edit', \App\Orchid\Screens\Task\TaskEditScreen::class)->name('platform.tasks.edit');
});

Route::screen('main', \App\Orchid\Screens\MainScreen::class)->name('platform.main');
