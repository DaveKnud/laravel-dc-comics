<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;



Route::get('/', [MainController::class, "index"])->name('comic.index');

Route::get('/create', [MainController::class, "create"])->name('comic.create');

Route::post('/store', [MainController::class, "store"])->name('comic.store');

Route::get('/show{id}', [MainController::class, "show"])->name('comic.show');

Route::get('/edit{id}', [MainController::class, "edit"])->name('comic.edit');
