<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\DemandeController;

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

Route::get('/', function () {
    return view('pages/login');
})->name('login');



Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/addUser', [RegisterController::class, 'register'])->name('addUser');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'login'])->name('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/offre', [OffreController::class, 'index'])->name('offre');

Route::get('/demande', [DemandeController::class, 'index'])->name('demande');

Route::get('/popOffre', [OffreController::class, 'popAdd'])->name('popOffre');

Route::post('/addOffre', [OffreController::class, 'addOffre'])->name('addOffre');

Route::get('/deleteOffre/{id}', [OffreController::class, 'deleteOffre'])->name('deleteOffre');

// Route::post('/updatedeOffre/{offre}', [OffreController::class, 'updatedeOffre'])->name('updatedeOffre');
