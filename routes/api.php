<?php

use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\TelefoneController;
use App\Http\Controllers\ReservaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('/reservas', ReservaController::class);
Route::apiResource('/clientes', ClienteController::class);
Route::apiResource('/telefones', TelefoneController::class);

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */