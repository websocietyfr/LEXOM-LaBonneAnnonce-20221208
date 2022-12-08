<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// pages statiques
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/cgv', [MainController::class, 'cgv'])->name('cgv');

// Annonces
Route::prefix('annonce')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/create', [AnnonceController::class, 'create'])->name('annonce.create');
        Route::post('/', [AnnonceController::class, 'store'])->name('annonce.store');
        Route::get('/{id}/edit', [AnnonceController::class, 'edit'])->name('annonce.edit');
        Route::put('/{id}', [AnnonceController::class, 'update'])->name('annonce.update');
        Route::delete('/{id}', [AnnonceController::class, 'destroy'])->name('annonce.destroy');
    });
    Route::get('/', [AnnonceController::class, 'index'])->name('annonce.list');
    Route::get('/{id}', [AnnonceController::class, 'show'])->name('annonce.show');
});

// Authentification
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
