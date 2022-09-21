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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/checkout',[\App\Http\Controllers\HomeController::class,'checkout'])->name('checkout');
Route::get('/sale',[\App\Http\Controllers\HomeController::class,'sale'])->name('sale');
Route::get('/shop',[\App\Http\Controllers\HomeController::class,'shop'])->name('shop');
Route::get('/single',[\App\Http\Controllers\HomeController::class,'single'])->name('single');




Route::get('adminindex',[\App\Http\Controllers\admin\AdminController::class,'index'])->name('admin');
Route::get('admin/menus/defaultmenu',[\App\Http\Controllers\Admin\Menu\MenuController::class,'index'])->name('menu_create');
Route::post('admin/menus/defaultmenu/store',[\App\Http\Controllers\Admin\Menu\MenuController::class,'store'])->name('menu_store');









