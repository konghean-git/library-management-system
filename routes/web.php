<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/push',[UserController::class,'add_users']);

// Route::redirect('/');

Auth::routes();



Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('/book', [HomeController::class, 'index'])->name('book.index');

    // Users

    Route::get('/users', [UserController::class, 'index'])->name('user.index');
});
