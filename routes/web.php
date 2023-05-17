<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coursController;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\matiereController;
use App\Http\Controllers\profController;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Matiere',matiereController::class );
Route::resource('Profs',profController::class );
Route::resource('Etudiants',etudiantController::class );
Route::resource('Cours',coursController::class );
Route::get('/login',[userController::class,'sendLogin']);
Route::post('/login',[userController::class,'login']);
