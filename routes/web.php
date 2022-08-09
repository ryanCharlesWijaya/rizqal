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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\LandingController::class, 'product'])->name('product');
Route::get('/about', [App\Http\Controllers\LandingController::class, 'about'])->name('about');
Route::get('/admin', [App\Http\Controllers\admin::class, 'index'])->name('admin');
Route::get('/AddProduct', [App\Http\Controllers\admin::class, 'addProduct'])->name('addProduct');
Route::get('/EditProduct/{id}', [App\Http\Controllers\admin::class, 'EditProduct'])->name('EditProduct');
Route::post('/AddProductProcess', [App\Http\Controllers\admin::class, 'addProductProcess'])->name('addProductProcess');
Route::post('/EditProductProcess', [App\Http\Controllers\admin::class, 'EditProductProcess'])->name('EditProductProcess');
Route::post('/DeleteProduct', [App\Http\Controllers\admin::class, 'deleteProduct'])->name('DeleteProduct');
