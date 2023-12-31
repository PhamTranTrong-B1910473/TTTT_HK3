<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhaosatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MucTieuController;
use App\Http\Controllers\TracNghiemController;
use App\Http\Controllers\BaigiangController;

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

Route::get('/muc-tieu',[MucTieuController::class,'MucTieu']); //pages muc tieu
Route::get('/trac-nghiem',[TracNghiemController::class,'TracNghiem']); //pages muc tieu


Route::get('/',[HomeController::class,'index']);
Route::get('/bai-viet/{id}',[KhaosatController::class,'show']);
Route::get('/bai-giang/{id}',[BaigiangController::class,'show']);

//auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\LoginController::class, 'index'])->name('home');

Route::prefix('v1')->group(function(){
    Route::resource('customer','App\Http\Controllers\Api\v1\CustomerController')->except(['edit','create']);
    Route::resource('category','App\Http\Controllers\Api\v1\CategoryPostController');
    Route::resource('post','App\Http\Controllers\Api\v1\PostController');
    
});
Route::prefix('v2')->group(function(){
    Route::resource('customer','App\Http\Controllers\Api\v2\CustomerController')->only(['show']);
});
