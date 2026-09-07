<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Books
Route::resource('books', BookController::class);

// Genres
Route::resource('genres', GenreController::class) ->except('show');
