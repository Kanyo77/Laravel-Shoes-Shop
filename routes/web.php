<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Catalog\CartController;
use App\Http\Controllers\Catalog\ShopController;
use App\Http\Controllers\Login\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdbillController;
use App\Http\Controllers\Admin\AdproductController;
use App\Http\Controllers\Admin\AdcustomerController;
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


Route::get('/',[HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('view');
Route::get('add-to-cart+1/{id}', [HomeController::class, 'addToCart1'])->name('add.cart1');
Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add.to.cart');
// Route::post('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add.to.cart');


Route::get('/Catalog/shop', [ShopController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/Catalog/cart', [CartController::class, 'index'])->name('cart');
Route::post('/Catalog/cart', [CartController::class, 'checkout']);
Route::get('/Catalog/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::get('/Catalog/cart/checkout/{id}', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/Catalog/checkout', [AboutController::class, 'index']);

//Route::get('/about',[AboutController::class, 'index']);

//Route::get('/Login/login',[LoginController::class, 'index']);
//Route::post('/Login/authenticate',[LoginController::class, 'authenticate']);
//Route::post('/Login/authenticate',[LoginController::class, 'checklogin1']);

// Route::get('/Login/register', [LoginController::class, 'index']);

Route::get('/Login/register', [RegisterController::class, 'index']);
Route::post('/Login/register', [RegisterController::class, 'register']);

Route::get('/Login/logout', [LoginController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);


Route::get('/checkout', [CheckoutController::class, 'index']);


Route::get('/Login1', [LoginController::class, 'index1']);
Route::post('/Login1', [LoginController::class, 'index1']);

Route::get('/Login/login', [LoginController::class, 'index']);
Route::post('/Login/login', [LoginController::class, 'index']);

// Route::get('/Login/register', [RegisterController::class, 'index']);

// Route::get('/Login/register', [RegisterController::class, 'index']);

Route::get('/Login/admin', [AdminController::class, 'index']);

Route::get('/Admin/bill', [AdbillController::class, 'index']);
    

Route::get('/Admin/product', [AdproductController::class, 'index'])->name('product');
Route::get('/Admin/product/register', [AdproductController::class, 'indexregister'])->name('indexregister');
Route::post('Admin/product/register', [AdproductController::class, 'store']);
Route::get('/Admin/product/delete/{id}', [AdproductController::class, 'delete'])->name('product.delete');

Route::get('Admin/product/edit',[AdproductController::class, 'edit'])->name('product.upload');
Route::post('Admin/product/edit',[AdproductController::class, 'upload']);

Route::get('/Admin/customer', [AdcustomerController::class, 'index']);

Route::get('edit-student/{id}', [AdproductController::class, 'edit']);

Route::post('update-student/{id}', [AdproductController::class, 'upload']);
