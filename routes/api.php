<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/datas', [DataController::class, 'get']);

    Route::get('/data/{id}', [DataController::class, 'getById']);
    
    Route::post('/data', [DataController::class, 'post']);
    
    Route::put('/data/{id}', [DataController::class, 'put']);
    
    Route::delete('/data/{id}', [DataController::class, 'delete']);
});

Route::get('me', 'AuthController@me')->middleware('log.route');

