<?php

use App\Http\Controllers\Receipt\AddReceiptController;
use App\Http\Controllers\Store\IndexStoreController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('receipt')->group(function () {
    Route::post('/', AddReceiptController::class);
});


Route::prefix('store')->group(function () {
    Route::get('/', IndexStoreController::class);
});
