<?php

use App\Http\Controllers\MoviesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'movies'], function () {
    Route::get('/', [MoviesController::class, 'index']);
    Route::post('/',[ MoviesController::class, 'store']);
    Route::get('/{id}', [MoviesController::class, 'show']);
    Route::patch('/{id}',[ MoviesController::class, 'update']);
    Route::delete('/{id}',[MoviesController::class, 'destroy']);
});