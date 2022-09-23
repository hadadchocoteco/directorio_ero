<?php

use App\Http\Controllers\Autenticacion\ActivaCuenta;
use App\Http\Controllers\Autenticacion\AutenticarController;
use App\Http\Controllers\Autenticacion\RecuperarAccesoController;
use App\Http\Controllers\Autenticacion\RegistroController;
use App\Http\Controllers\Publico\CuentaController;
use App\Http\Controllers\Publico\PublicoController;
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

Route::get('/', [PublicoController::class, 'index'])->name('inicio');

Route::get('/autenticacion/inicio-sesion', [AutenticarController::class, 'inicioSesion'])->name('inicioSesion');
Route::post('/autenticacion/autenticar', [AutenticarController::class, 'autenticar'])->name('autenticar');

Route::get('/autenticacion/registro', [RegistroController::class, 'index'])->name('registro');
Route::post('/autenticacion/registro/guardar', [RegistroController::class, 'guardar'])->name('registroGuardar');

Route::get('/autenticacion/recuperar/cuenta', [RecuperarAccesoController::class, 'index'])->name('recuperarAcceso');
Route::post('/autenticacion/recuperar/cuenta/accion', [RecuperarAccesoController::class, 'recuperar'])->name('recuperarAccesoAccion');

Route::get('/cuenta', [CuentaController::class, 'index'])->name('miCuenta');
/* Invocables */
Route::get('/autenticacion/activar/cuenta', ActivaCuenta::class)->name('activarCuenta');

Route::get('/{servicio?}', [PublicoController::class, 'busqueda'])->name('busqueda');