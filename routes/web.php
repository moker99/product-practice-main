<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';





// 方法一
// Route::get('/ms', [MessageController::class, 'index'])->name('messages.index');
// Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::middleware('auth')->post('/messages/{id}/reply', [MessageController::class, 'reply'])->name('messages.reply');
// Route::put('/messages/{id}/edit', [MessageController::class, 'edit'])->name('messages.edit');
// Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
Route::middleware('auth')->put('/replies/{id}/edit', [MessageController::class, 'replyEdit'])->name('replies.edit');
Route::middleware('auth')->delete('/replies/{id}', [MessageController::class, 'replyDestroy'])->name('replies.destroy');
// 方法二
Route::middleware('auth')->resource('/messages', MessageController::class);
Route::get('/', [FrontController::class, 'index'])->name('products.index');

Route::middleware('auth')->prefix('/product')->group(function () {

    Route::get('/list', [ProductController::class, 'index'])->name('product.index');

    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');

    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
});

Route::resource('/type', TypeController::class);
Route::get('/playground', [FrontController::class, 'test01']);
Route::post('/fetch/test', [FrontController::class, 'fetchTest']);
Route::post('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

