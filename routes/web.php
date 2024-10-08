<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;



Route::middleware(['auth'])->group(function () {

    Route::inertia('/dashboard', 'Admin/Dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {

    // login
    Route::inertia('/login', 'Auth/Login')->name('login');

    Route::post('/login', [AuthController::class, 'login']);
    Route::inertia('/', 'Home')->name('home');

    Route::inertia('/register', 'Auth/Register')->name('register');

    Route::post('/register', [AuthController::class, 'register']);
});
