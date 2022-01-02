<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControlController;

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
//Pantalla inicial
Route::get('/', [LoginController::class, 'showLogin'])->name('ingreso');

Route::get('olvida-clave', [LoginController::class, 'forgetPassword'])->name('olvidaclave');

Route::get('solicita-registro', [LoginController::class, 'register'])->name('solicitaregistro');

//Validar login
//Route::get('marcaje', [LoginController::class, 'doLogin']);

//Pantallas logeadas
Route::get('marcaje', [ControlController::class, 'marcaje'])->name('marcaje');

//Route::get('marcaje', [ControlController::class, 'marcajeGuardar'])->name('marcaje');

Route::get('mis-marcas', [ControlController::class, 'miMarcaje'])->name('mismarcas');

Route::get('marcas', [ControlController::class, 'miMarcaje'])->name('marcas')->where('id', '[0-9]+');

Route::get('salir', [ControlController::class, 'salir'])->name('salir');

