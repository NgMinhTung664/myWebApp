<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/book', [BookController::class, 'index'])->name('books.index');


Route::get('/book/{id}', [BookController::class, 'show'])->name('books.show');
