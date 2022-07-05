<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('libros', App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('suscriptores', App\Http\Controllers\SuscriptoreController::class)->middleware('auth');
Route::resource('prestamos', App\Http\Controllers\PrestamoController::class)->middleware('auth');

Route::get('/reporte', [App\Http\Controllers\ReporteController::class, 'index'])->name('reporte');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
