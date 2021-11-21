<?php

use App\Http\Livewire\Frontend\Home;
use App\Http\Livewire\Frontend\Productdetail;
use App\Http\Livewire\Frontend\Products;
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


Route::get('/', Home::class)->name('home');

Route::get('/shops', Products::class)->name('shops');
// Route::get('/shops/all/{$id}', Productdetail::class)->name('productdetail');
Route::get('/shops/products/{product_id}', Productdetail::class)->name('productdetail');

