<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\OccasionController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\PotaturaController;



Route::get('/', function () {
    return view('home');
})->name('home');

// Registrazione
Route::get('/register',[UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[UserController::class, 'register'])->name('registerUser');

Route::get('/login',[UserController::class,'showLoginForm'])->name('login');
Route::post('/login',[UserController::class,'login'])->name('loginUser');
Route::get("/createAdmin",[UserController::class,"createAdmin"])->name("createAdmin");
Route::get("/handlePermissions",[UserController::class,"HandlePermissions"])->name("handlePermissions");

Route::get('/userProfile',[UserController::class,'showUserProfile'])->name('showUserProfile');
Route::post('/userProfile',[UserController::class,'updateUserProfile'])->name('updateUserProfile');

Route::post('/logout',[UserController::class,'logout'])->name('logoutUser');

Route::post('/upload-image',[UserController::class,'uploadImage'])->name('upload.image');

//pagina per ogni occasione 
Route::get('/occasione/{tipo}', [OccasionController::class, 'show']);


//CRUD
//mostra catalogo
Route::get('/flowers', [FlowerController::class, 'index'])->name('flowers.index');
//form creazione
Route::get('/flowers/create', [FlowerController::class, 'create'])->name('flowers.create');
//Salva immagine fiore
Route::post('/upload-flower-image',[FlowerController::class,'uploadFlowerImage'])->name('flowers.image');
//salva nuovo fiore
Route::post('/flowers', [FlowerController::class, 'store'])->name('flowers.store');
//mostra dettaglio
Route::get('/flowers/{flower}', [FlowerController::class, 'show'])->name('flowers.show');
//form modifica
Route::get('/flowers/{flower}/edit', [FlowerController::class, 'edit'])->name('flowers.edit');
//aggiorna fiore
Route::put('/flowers/{flower}', [FlowerController::class, 'update'])->name('flowers.update');
//elimina fiore 
Route::delete('/flowers/{flower}', [FlowerController::class, 'destroy'])->name('flowers.destroy');

//catalogo
Route::get('/catalogo', [FlowerController::class, 'index'])->name('catalogo');
//fiore nel catalogo
Route::get('/flowers/{id}', [FlowerController::class, 'show'])->name('flowers.show');

//calendario potatura e innesti 
Route::get('/giardinaggio', function () {
    return view('giardinaggio'); 
}) ->name('giardinaggio');

Route::get('/potatura', [PotaturaController::class, 'index'])->name('potatura');


