<?php

declare(strict_types=1);

use App\Orchid\Screens\Action\ActionEditScreen;
use App\Orchid\Screens\Action\ActionListScreen;
use App\Orchid\Screens\Choice\ChoiceEditScreen;
use App\Orchid\Screens\Choice\ChoiceListScreen;
use App\Orchid\Screens\FAQ\FAQEditScreen;
use App\Orchid\Screens\FAQ\FAQListScreen;
use App\Orchid\Screens\Goal\GoalEditScreen;
use App\Orchid\Screens\Goal\GoalListScreen;
use App\Orchid\Screens\InterpreterScreen;
use App\Orchid\Screens\MainScreen;
use App\Orchid\Screens\Quote\QuoteEditScreen;
use App\Orchid\Screens\Quote\QuoteListScreen;
use App\Orchid\Screens\Task\TaskEditScreen;
use App\Orchid\Screens\Task\TaskListScreen;
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

Route::screen('main', MainScreen::class)->name('platform.main');
Route::screen('interpreter', InterpreterScreen::class)->name('platform.interpreter');

Route::group(['prefix' => 'choices'], function () {
    Route::screen('/', ChoiceListScreen::class)->name('platform.choices.list');
    Route::screen('/create', ChoiceEditScreen::class)->name('platform.choices.create');
    Route::screen('/{choice}/edit', ChoiceEditScreen::class)->name('platform.choices.edit');
});
Route::group(['prefix' => 'quotes'], function () {
    Route::screen('/', QuoteListScreen::class)->name('platform.quotes.list');
    Route::screen('/create', QuoteEditScreen::class)->name('platform.quotes.create');
    Route::screen('/{quote}/edit', QuoteEditScreen::class)->name('platform.quotes.edit');
});
Route::group(['prefix' => 'faqs'], function () {
    Route::screen('/', FAQListScreen::class)->name('platform.faqs.list');
    Route::screen('/create', FAQEditScreen::class)->name('platform.faqs.create');
    Route::screen('/{faq}/edit', FAQEditScreen::class)->name('platform.faqs.edit');
});
Route::group(['prefix' => 'goals'], function () {
    Route::screen('/', GoalListScreen::class)->name('platform.goals.list');
    Route::screen('/create', GoalEditScreen::class)->name('platform.goals.create');
    Route::screen('/{goal}/edit', GoalEditScreen::class)->name('platform.goals.edit');
});
Route::group(['prefix' => 'tasks'], function () {
    Route::screen('/', TaskListScreen::class)->name('platform.tasks.list');
    Route::screen('/create', TaskEditScreen::class)->name('platform.tasks.create');
    Route::screen('/{task}/edit', TaskEditScreen::class)->name('platform.tasks.edit');
});
Route::group(['prefix' => 'actions'], function () {
    Route::screen('/', ActionListScreen::class)->name('platform.actions.list');
    Route::screen('/create', ActionEditScreen::class)->name('platform.actions.create');
    Route::screen('/{action}/edit', ActionEditScreen::class)->name('platform.actions.edit');
});
