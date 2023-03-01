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

Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/product', [\App\Http\Controllers\Admin\ProductController::class, 'index'])
              ->name('admin.product.index');

});
