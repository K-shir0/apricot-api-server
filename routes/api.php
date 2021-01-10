<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Product\IndexProductController;
use App\Http\Controllers\Receipt\AddReceiptController;
use App\Http\Controllers\Shop\IndexShopController;
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


Route::prefix('shop')->group(function () {
    Route::get('/', IndexShopController::class);
});


// カテゴリルート
Route::prefix('category')->group(function () {
    // 子のカテゴリ
    Route::get('/{category_id}', [CategoryController::class, 'children']);
});

// 商品ルート
Route::prefix('product')->group(function () {
    Route::get('/', IndexProductController::class);
});
