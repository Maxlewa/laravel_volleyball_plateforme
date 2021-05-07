<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/* ____________________ FRONT ____________________ */

Route::get('/', [FrontController::class, 'home'])->name('home');

/* ____________________ BACK ____________________ */
