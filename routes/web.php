<?php

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

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('main.index');


Route::get('/admin/main', [\App\Http\Controllers\Admin\MainController::class, 'index'])
              ->name('admin.main');

Route::get('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])
                ->name('admin.product.index');

Route::get('/admin/products/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])
                ->name('admin.product.create');

Route::post('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'store'])
                ->name('admin.product.store');


