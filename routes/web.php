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
Route::get('/home', [\App\Http\Controllers\MesaController::class, 'index'])->name('home');
Route::get('mesa/atender/{id}', [\App\Http\Controllers\MesaController::class, 'atender'])->name('mesa.atender');
Route::get('mesa/pagar/{id}', [\App\Http\Controllers\MesaController::class, 'pagar'])->name('mesa.pagar');
Route::get('itemcomanda/agregarItem/{id}', [\App\Http\Controllers\ItemcomandaController::class, 'agregarItem'])->name('itemcomanda.agregarItem');
Route::post('itemcomanda/guardarItem/{id}/{producto}/{precio}', [\App\Http\Controllers\ItemcomandaController::class, 'guardarItem'])->name('itemcomanda.guardarItem');
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

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

