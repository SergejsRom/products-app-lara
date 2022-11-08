<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController as Product;


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
// Route::get('products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');

Route::resource('products', Product::class);
Route::get('/product-form' , [App\Http\Livewire\ProductForm::class]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

