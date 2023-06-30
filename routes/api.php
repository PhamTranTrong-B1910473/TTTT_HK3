<?php

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



Route::prefix('v1')->group(function(){
    Route::resource('customer','App\Http\Controllers\Api\v1\CustomerController')->except(['edit','create']);
    Route::resource('category','App\Http\Controllers\Api\v1\CategoryPostController');
});
Route::prefix('v2')->group(function(){
    Route::resource('customer','App\Http\Controllers\Api\v2\CustomerController')->only(['show']);
});


