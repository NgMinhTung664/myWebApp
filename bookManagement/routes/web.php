<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// 1. ROUTE GỐC (Đã kiểm tra và hoạt động)
Route::get('/', function () {
    return '<h1>Laravel is running! Go to /book</h1>';
});

// 2. ROUTE SÁCH (Trỏ đến Controller)
Route::get('/book', [BookController::class, 'index'])->name('books.index');

Route::get('/book/{id}', [BookController::class, 'show'])->name('books.show');




 Route::post('/book', 'App\Http\Controllers\apipostBook@postBook');

    

Route::get('/getbook', 'App\Http\Controllers\apipostBook@getBook');