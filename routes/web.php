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
Route::prefix('/')->group(function () {
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/shop',[\App\Http\Controllers\HomeController::class,'shop'])->name('shop');
Route::get('/sale',[\App\Http\Controllers\HomeController::class,'sale'])->name('sale');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/single_product/{products}',[\App\Http\Controllers\HomeController::class,'single'])->name('single_product');
Route::get('/checkout/{products}',[\App\Http\Controllers\HomeController::class,'checkout'])->name('checkout');
});

Route::get('/administration',[\App\Http\Controllers\AdminController::class,'index'])->name('admini');
Route::get('topcat',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'index'])->name('topcat');
Route::get('/menu_index',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'index'])->name('menu_index');
Route::get('/menu_create',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'create'])->name('menu_create');
Route::post('/menu_store',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'store'])->name('menu_store');
Route::get('/menu_show',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'show'])->name('menu_show');

Route::get('/productsIndex',[\App\Http\Controllers\Admin\ProductsController::class,'index'])->name('products_Index');
Route::get('/products_create',[\App\Http\Controllers\Admin\ProductsController::class,'create'])->name('products_create');
Route::post('/products_store',[\App\Http\Controllers\Admin\ProductsController::class,'store'])->name('products_store');
Route::get('/products_show',[\App\Http\Controllers\Admin\ProductsController::class,'show'])->name('products_show');
Route::get('products_edit/{id}',[\App\Http\Controllers\Admin\ProductsController::class,'edit'])->name('products_edit');

Route::put('products_update/{id}',[\App\Http\Controllers\Admin\ProductsController::class,'update'])->name('product_update');

