<?php

use App\Http\Controllers\Api\Price_ceasa_bhController;
use App\Http\Controllers\Api\ProductController;
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

Route::controller(ProductController::class)->group (function () {
    Route::get('/products','index');
    Route::post('/product','store');
    Route::get('/product/{id}','show');
    Route::put('/product/{id}','update');
    Route::delete('/product/{id}','destroy');
});

Route::controller(Price_ceasa_bhController::class)->group (function () {
    Route::get('/price_ceasa_bhs','index');
    Route::post('/price_ceasa_bh','store');
    Route::get('/price_ceasa_bh/{id}','show');
    Route::put('/price_ceasa_bh/{id}','update');
    Route::delete('/price_ceasa_bh/{id}','destroy');
});
