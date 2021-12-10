<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/push', [UserController::class, 'add_users']);

Route::redirect('/', 'en');


Route::prefix('{language}')->group(function () {

    Auth::routes();
    Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


        Route::get('/home', [HomeController::class, 'index'])->name('home');


        Route::get('/book', [HomeController::class, 'index'])->name('book.index');

        // Users
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::post('/users', [UserController::class, 'filter_users'])->name('users.filter');
        Route::get('/users/clear-filter', [UserController::class, 'clear_filter'])->name('users.clear_filter');
    });
});
