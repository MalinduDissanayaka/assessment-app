<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Display the login form
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Process the login submission
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

// Redirect here on success
Route::get('/dashboard', function () {
    return "<h1>Welcome to the Dashboard!</h1>";
})->name('dashboard');