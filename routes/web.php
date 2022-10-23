<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserAuthController;

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
Route::get('/single_product/{product}',[\App\Http\Controllers\HomeController::class,'single'])->name('single_product');
Route::get('/checkout/{product}',[\App\Http\Controllers\HomeController::class,'checkout'])->name('checkout');
});

Route::get('/administration',[\App\Http\Controllers\AdminController::class,'index'])->name('admini');
Route::get('topcat',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'index'])->name('topcat');
Route::get('/menu_index',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'index'])->name('menu_index');
Route::get('/menu_create',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'create'])->name('menu_create');
Route::post('/menu_store',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'store'])->name('menu_store');
Route::get('/menu_show',[\App\Http\Controllers\Admin\adminmenu\MenuController::class,'show'])->name('menu_show');

Route::get('/productsIndex',[\App\Http\Controllers\Admin\ProductController::class,'index'])->name('products_Index');
Route::get('/products_create',[\App\Http\Controllers\Admin\ProductController::class,'create'])->name('products_create');
Route::post('/products_store',[\App\Http\Controllers\Admin\ProductController::class,'store'])->name('products_store');
Route::get('products_show/{item}',[\App\Http\Controllers\Admin\ProductController::class,'show'])->name('products_show');
Route::get('products_edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('products_edit');
Route::put('products_update/{id}',[\App\Http\Controllers\Admin\ProductController::class,'update'])->name('products_update');
Route::delete('product_delete/{id}',[\App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('product_delete');



Route::post('login',[\App\Http\Controllers\Admin\UserAuthController::class,'login'])->name('login');

Route::get('registration',[\App\Http\Controllers\Admin\UserAuthController::class,'register'])->name('registration');
Route::post('create',[\App\Http\Controllers\Admin\UserAuthController::class,'create'])->name('regiter_user');
Route::post('/profile',[\App\Http\Controllers\Admin\UserAuthController::class,'profile'])->name('/profile');

Route::get('/search',[\App\Http\Controllers\Admin\SearchController::class,'search'])->name('search');


