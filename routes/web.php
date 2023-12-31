<?php

use App\Http\Controllers\AsesoriaAController;
use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\AsesoriaDController;
use App\Http\Controllers\AsesoriasCController;
use App\Http\Controllers\AsignaturaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/asesorias', AsesoriaController::class);

Route::resource('/asesoriasD', AsesoriaDController::class);

Route::resource('/asesoriasA', AsesoriaAController::class);

Route::resource('/asesoriasC', AsesoriasCController::class);

Route::resource('/asignaturas', AsignaturaController::class);


