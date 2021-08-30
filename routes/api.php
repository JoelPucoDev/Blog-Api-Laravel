<?php

use App\Http\Controllers\ArticleController;
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

// *** ARTICLES ***

//Ruta que devuelve todas los Articulos de nuestra base de datos
Route::get('articles', [ ArticleController::class, 'index']);
//Ruta que devuelve el un articulo espesifico segun el id
Route::get('articles/{id}', [ ArticleController::class, 'show']);
//Ruta que crea un registro en la tabla articulos
Route::post('articles', [ ArticleController::class, 'store']);
//Ruta que permite actualizar un registro
Route::put('articles/{id}', [ ArticleController::class, 'update']);
//Ruta que permite eliminar un registro especifico segun el id
Route::delete('articles/{id}', [ ArticleController::class, 'delete']);