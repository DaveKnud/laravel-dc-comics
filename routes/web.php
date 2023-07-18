<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;



Route::get('/', [MainController::class, "index"])->name('comic.index');

Route::get('/show{id}', [MainController::class, "show"])->name('comic.show');
