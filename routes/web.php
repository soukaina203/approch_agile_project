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
    return view('layouts.app');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Matiere',matiereController::class );
Route::resource('Profs',profController::class );
Route::resource('Etudiants',etudiantController::class );
Route::resource('Cours',coursController::class );
Route::get('cours/all',[coursController::class ,'all']);
Route::get('Cours/{id}/etud',[coursController::class ,'studentStatus']);
Route::post('search',[coursController::class,'research'] );
Route::post('search/etud',[coursController::class,'research2'] );
Route::get('/cours/all/admin',[coursController::class,'adminCours'] );

Route::get('/login',[userController::class,'login']);
Route::post('/handleLogin',[userController::class,'handleLogin']);
Route::get('/signUp/{any}',[userController::class,'signUp']);
Route::get('logout/',[userController::class,'logOut']);


Route::get('/choose',[userController::class,'choosenPage']);

Route::get('ProfCours/{id}',[profController::class,'profCours'] );
Route::get('/',function () {
    return view('welcome');
}
);
