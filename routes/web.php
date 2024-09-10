<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});


// Route::get('/about', function () {
//     return inertia('About',['user' => 'Numan Khan']);
// });

Route::inertia('/about', 'About', ['user' => 'Numan Khan']);