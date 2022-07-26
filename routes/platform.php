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

Route::screen('php', \App\Orchid\Screens\PHPScreen::class)->name('platform.php');
Route::screen('choices', \App\Orchid\Screens\ChoiceListScreen::class)->name('platform.choices.list');
Route::screen('choice/{choice?}', \App\Orchid\Screens\ChoiceEditScreen::class)->name('platform.choices.edit');
