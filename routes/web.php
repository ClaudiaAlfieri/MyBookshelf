<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Books
Route::view('/books', 'books.index')->name('books.index');
Route::view('/books/create', 'books.create')->name('books.create');
Route::view('/books/edit', 'books.edit')->name('books.edit');
Route::view('/books/{book}', 'books.show')->name('books.show');

// Genres
Route::view('/genres', 'genres.index')->name('genres.index');
Route::view('/genres/create', 'genres.create')->name('genres.create');
Route::view('/genres/edit', 'genres.edit')->name('genres.edit');
