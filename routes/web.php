<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

/* ____________________ FRONT ____________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/teams', [FrontController::class, 'teams'])->name('teams');
Route::get('/players', [FrontController::class, 'players'])->name('players');

/* ____________________ BACK ____________________ */

// ADMIN HOME

Route::get('/admin', [FrontController::class, 'adminHome'])->name('adminHome');

Route::resource('admin/players', PlayerController::class);
