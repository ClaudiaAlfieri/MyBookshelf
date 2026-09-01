<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home');

Route::view('/books','books.index');

Route::view('/genre','genre.index');
