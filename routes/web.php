<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TournamentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('tournaments', TournamentController::class);
