<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarroController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/carros', [CarroController::class, 'index']);
Route::post('/carros', [CarroController::class, 'store']);
Route::get('/carros/{id}', [CarroController::class, 'edit']);
Route::put('/carros/{id}', [CarroController::class, 'update']);
Route::delete('/carros/{id}', [CarroController::class, 'destroy']);
