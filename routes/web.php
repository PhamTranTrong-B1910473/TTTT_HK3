<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhaosatController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'index']);
Route::get('/bai-viet/{id}',[KhaosatController::class,'show']);

//auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\LoginController::class, 'index'])->name('home');

Route::prefix('v1')->group(function(){
    Route::resource('customer','App\Http\Controllers\Api\v1\CustomerController')->except(['edit','create']);
    Route::resource('category','App\Http\Controllers\Api\v1\CategoryPostController');
});
Route::prefix('v2')->group(function(){
    Route::resource('customer','App\Http\Controllers\Api\v2\CustomerController')->only(['show']);
});
