<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

// ruta para articulos
Route::get('/productos/obtenerTodos', [ProductoController::class, 'index']);
Route::post('/productos/crear', [ProductoController::class, 'store']);
Route::put('/productos/actualizar/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/eliminar/{id}', [ProductoController::class, 'destroy']);



