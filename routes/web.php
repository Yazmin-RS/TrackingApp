<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/prueba',  [LocationController::class, 'index'])->name('prueba');

