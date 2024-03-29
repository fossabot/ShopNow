<?php

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
Route::resource('/', 'FrontController');
Route::resource('admin', 'DashboardController');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('brand', 'BrandController');
