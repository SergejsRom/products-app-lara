<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController as Product;
use App\Http\Livewire\ProductForm as ProductForm;


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

Route::get('/', [Product::class, 'index'])->name('index');
//Route::get('/', [Product::class, 'create']);
Route::get('add-product', [Product::class, 'create'])->name('add-product');
// Route::get('products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
// Route::get('/product-form' , [App\Http\Livewire\ProductForm::class]);
// Route::get('/product-form', ProductForm::class);

Route::resource('products', Product::class);
// Auth::routes();


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

