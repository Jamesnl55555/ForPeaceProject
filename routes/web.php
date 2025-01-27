<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/loginpage', [BookController::class,'loginPage'])->name('loginPage');
Route::post('/login', [BookController::class, 'login'])->name('login');

Route::get('/registerpage', [BookController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [BookController::class, 'register'])->name('register');


Route::middleware('authentication')->group(function (){
    Route::get('/', [BookController::class, 'Home'])->name('Home');

    Route::get('/viewtest/{id}', [BookController::class, 'viewtest'])->name('viewtest');
    Route::get('/nolimetangere', [BookController::class, 'Main'])->name('Main');
    Route::get('/syn/{testId}', [BookController::class, 'Synonym'])->name('Synonym');
    Route::get('/halo/{testId}', [BookController::class, 'Halo'])->name('Halo');
    Route::post('/Add', [BookController::class, 'Add'])->name('Add');
    Route::post('/bookmark', [BookController::class, 'bookmark'])->name('bookmark');
    Route::get('/showtest', [BookController::class, 'showTest'])->name('showTest');
    Route::get('/taketest', [BookController::class, 'takeTest'])->name('takeTest');
    Route::post('/createst', [BookController::class, 'createst'])->name('createst');
    Route::post('/response', [BookController::class, 'response'])->name('response');
    Route::get('/leaderboards', [BookController::class, 'leaderboards'])->name('leaderboards');
    Route::post('logout', [BookController::class, 'logout'])->name('logout');
});