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

Route::get('adminindex',[\App\Http\Controllers\admin\AdminController::class,'index'])->name('admin');
Route::get('admin/menus/defaultmenu',[\App\Http\Controllers\Admin\Menu\MenuController::class,'index'])->name('menu_create');
