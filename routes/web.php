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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route group with auth middleware
Route::middleware(['auth'])->group(function () {
    // Protected routes
    Route::get('user/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
    Route::POST('user/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');


    //Products
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
    Route::get('/list', [App\Http\Controllers\ProductController::class, 'list'])->name('list');
    Route::post('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
    Route::get('pro/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit.product');
    Route::Delete('/product-delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete.product');
    Route::POST('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('update.product');
});

