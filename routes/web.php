<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OccasionController;
use App\Http\Controllers\FlowerController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Registrazione
Route::get('/register',[UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[UserController::class, 'register'])->name('registerUser');

Route::get('/login',[UserController::class,'showLoginForm'])->name('login');
Route::post('/login',[UserController::class,'login'])->name('loginUser');

Route::post('/logout',[UserController::class,'logout'])->name('logoutUser');


//pagina per ogni occasione 
Route::get('/occasione/{tipo}', [OccasionController::class, 'show']);

//catalogo
Route::get('/catalogo', [FlowerController::class, 'index'])->name('catalogo');
//fiore nel catalogo
Route::get('/flowers/{id}', [FlowerController::class, 'show'])->name('flowers.show');
