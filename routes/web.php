<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('product');
    Route::get('/product-add', 'add')->name('product.add');
    Route::get('/product-edit', 'edit')->name('product.edit');
    Route::post('/product-edit', 'store')->name('product.store');
});





require __DIR__ . '/auth.php';