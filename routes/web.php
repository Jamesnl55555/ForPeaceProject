<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('home');
});

Route::get('/nolimetangere', [BookController::class, 'Main'])->name('Main');