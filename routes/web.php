<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('home');
});

Route::get('/nolimetangere', [BookController::class, 'Main'])->name('Main');

Route::get('/hamon', function () {
    return view('hamon');
});

Route::get('/syn/{testId}', [BookController::class, 'Synonym'])->name('Synonym');
Route::get('/halo/{testId}', [BookController::class, 'Halo'])->name('Halo');
Route::post('/add', [BookController::class, 'add'])->name('add');