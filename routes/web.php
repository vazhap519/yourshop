<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\Http\Controllers\pageController::class,'index']);
Route::get('/shop',[\App\Http\Controllers\pageController::class,'shop']);
Route::get('/about',[\App\Http\Controllers\pageController::class,'about']);
Route::get('/sale',[\App\Http\Controllers\pageController::class,'sale']);


//Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
//
//});
Route::get('/admin/index',[\App\Http\Controllers\Admin\AdminController::class,'index']);
