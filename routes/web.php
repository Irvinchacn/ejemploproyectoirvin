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

Route::get('vistauno', 'App\Http\Controllers\contenido@vista1');
Route::get('vistados', 'App\Http\Controllers\contenido@vista2');
Route::get('vistatres', 'App\Http\Controllers\contenido@vista3');
Route::get('vistacuatro', 'App\Http\Controllers\contenido@vista4');
Route::get('vistacinco', 'App\Http\Controllers\contenido@vista5');
Route::get('vistaseis', 'App\Http\Controllers\contenido@vista6');

Route::get('registrarlibro', 'App\Http\Controllers\contenido@registralibro')->name('registrarlibro');
Route::post('guardarlibro', 'App\Http\Controllers\contenido@guardarlibro')->name('guardarlibro');

Route::get('consultalibros', 'App\Http\Controllers\contenido@consultalibros')->name('consultalibros');
Route::get('eliminar/{id}', 'App\Http\Controllers\contenido@eliminarLibro')->name('eliminarlibro');

Route::get('muestra/{id}', 'App\Http\Controllers\contenido@muestraLibro')->name('muestralibro');
Route::POST('editar/{id}', 'App\Http\Controllers\contenido@editalibro')->name('editarlibro');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();