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

Route::get('/login', function(){
    return view('login');
});

Route::resource('producto', \App\Http\Controllers\ProductoController::class);
Route::resource('caja',\App\Http\Controllers\CajaController::class);
Route::resource('permiso',\App\Http\Controllers\PermisoController::class);
Route::resource('rol', \App\Http\Controllers\RolController::class);
Route::resource('usuario',\App\Http\Controllers\UsuarioController::class);
Route::resource('comanda', \App\Http\Controllers\ComandaController::class);
Route::resource('itemcomanda',\App\Http\Controllers\ItemcomandaController::class);
Route::resource('comentario',\App\Http\Controllers\ComentarioController::class);
Route::resource('mesa',\App\Http\Controllers\MesaController::class);
Route::resource('categoria',\App\Http\Controllers\CategoriaController::class);
