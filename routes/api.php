<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebidaController;
use App\Http\middleware\Autenticacion;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::get('bebida',[BebidaController::class, 'Listar']);
    Route::get('bebida/{d}',[BebidaController::class, 'Obtener']);
    Route::post('bebida',[BebidaController::class, 'Crear']) -> middleware(Autenticacion::class);
    Route::put('bebida/{d}',[BebidaController::class, 'Actualizar']) -> middleware(Autenticacion::class);
    Route::delete('bebida/{d}',[BebidaController::class, 'Borrar']) -> middleware(Autenticacion::class);
});


