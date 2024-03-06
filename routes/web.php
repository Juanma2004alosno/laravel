<?php

use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\GeneroController;
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

Route::get('', [PeliculasController::class, 'index'])->name('inicio');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('peliculas', [PeliculasController::class, 'index'])->name('peliculas');
Route::get('Terror', [PeliculasController::class, 'Terror'])->name('Terror');
Route::get('cs', [LoginController::class, 'cs'])->name('cs');
Route::post('login',[LoginController::class, 'log'])->name('login.n');
Route::get('registro', [RegistroController::class, 'index'])->name('registro');
Route::get('genero/{nombre_genero}', [GeneroController::class, 'index'])->name('genero');
Route::get('show/{cod_pelicula}', [PeliculasController::class, 'show'])->name('show');
Route::get('crear-pelicula', [PeliculasController::class, 'create'])->name('crear_pelicula');
Route::post('crear-pelicula', [PeliculasController::class, 'store'])->name('guardar_pelicula');
Route::delete('eliminar-pelicula/{cod_pelicula}', [PeliculasController::class, 'destroy'])->name('eliminar_pelicula');


