<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\EquipoController;
use App\Http\Controllers\Api\ProbetaController;
use App\Http\Controllers\Api\TipoensayoController;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[LoginController::class,'store']);


/* Route::get('probetas', [ProbetaController::class,'index'])->name('api.probetas'); */

Route::apiResource('probetas', ProbetaController::class)->names('api.probetas');
Route::get('probetasa/{idtipoensayo}', [ProbetaController::class,'busquedaSubcodigo']);
Route::apiResource('tipoensayo', TipoensayoController::class)->names('api.tipoensayo');
Route::get('tipoensayopend', [TipoensayoController::class,'Pendientes']);
Route::get('tipoensayoterm', [TipoensayoController::class,'Terminados']);
Route::put('probetasa/{idtipoensayo}/{subcodigo}', [ProbetaController::class,'updateRegistro']);  



//Equipos
Route::get('indexVernier', [EquipoController::class,'indexVernier']);
Route::get('indexBalanza', [EquipoController::class,'indexBalanza']);
Route::get('indexPrensa', [EquipoController::class,'indexPrensa']);
Route::get('indexAlmohadilla', [EquipoController::class,'indexAlmohadilla']);


