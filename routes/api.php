<?php

use App\Http\Controllers\Api\Front\OrderController;
use App\Http\Controllers\Api\Front\UnitController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => 'admin', 'prefix' => 'v1'], function ($router) {
//     Route::post('/unit', [UnitController::class, 'store']);  
// });

Route::group(['prefix' => 'v1'], function ($router) {
    Route::get('/units', [UnitController::class, 'index']);  
    Route::post('/order', [OrderController::class, 'store']);  
});