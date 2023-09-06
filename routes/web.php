<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('products.index');

Route::prefix('/product')->group(function () {

    Route::get('/list', [ProductController::class, 'index'])->name('product.index');

    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');


    Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});

Route::resource('/type', TypeController::class);
Route::get('/playground', [FrontController::class, 'test01']);
Route::post('/fetch/test', [FrontController::class, 'fetchTest']);
Route::resource('/message', MessageController::class);
