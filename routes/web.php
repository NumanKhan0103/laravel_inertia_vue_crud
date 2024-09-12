<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::inertia('/', 'Home')->name('home');

Route::inertia('/register', 'Auth/Register')->name('register');

Route::post('/register', [AuthController::class, 'register']);