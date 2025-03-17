<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Registrazione
Route::get('/register',[UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[UserController::class, 'register'])->name('registerUser');

Route::get('/login',[UserController::class,'showLoginForm'])->name('login');
Route::post('/login',[UserController::class,'login'])->name('loginUser');

Route::post('/logout',[UserController::class,'logout'])->name('logoutUser');
