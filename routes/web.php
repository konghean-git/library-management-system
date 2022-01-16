<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/push', [UserController::class, 'add_users']);

Route::redirect('/', 'kh');


Route::prefix('{language}')->group(function () {

    Auth::routes();
    Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


        Route::get('/dashboard', [HomeController::class, 'index'])->name('home');


        Route::get('/book', [HomeController::class, 'index'])->name('book.index');

        // Users
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::post('/users', [UserController::class, 'filter_users'])->name('users.filter');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/create-submit', [UserController::class, 'create_submit'])->name('user.create_submit');
    });
});
