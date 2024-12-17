<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/loginpage', [BookController::class,'loginPage'])->name('loginPage');
Route::post('/login', [BookController::class, 'login'])->name('login');

Route::get('/registerpage', [BookController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [BookController::class, 'register'])->name('register');


Route::middleware('authentication')->group(function (){
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/nolimetangere', [BookController::class, 'Main'])->name('Main');
    Route::get('/hamon', function () {
        return view('hamon');
    });
    Route::get('/syn/{testId}', [BookController::class, 'Synonym'])->name('Synonym');
    Route::get('/halo/{testId}', [BookController::class, 'Halo'])->name('Halo');
    Route::post('/add', [BookController::class, 'Add'])->name('Add');
    Route::get('/showtest', [BookController::class, 'showTest'])->name('showTest');
    Route::post('logout', [BookController::class, 'logout'])->name('logout');
});