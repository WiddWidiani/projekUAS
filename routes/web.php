<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('app.login'); // Mengarahkan ke resources\views\app\login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('app.register'); // Mengarahkan ke resources\views\app\register.blade.php
})->name('register');