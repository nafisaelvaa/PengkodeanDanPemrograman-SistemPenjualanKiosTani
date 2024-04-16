<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;

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
    return view('landingPage');
});


//Login
Route::get('loginAdmin', [AuthController::class, 'loginAdmin']);
Route::post('loginAdminAction', [AuthController::class, 'loginAdminAction']);
Route::get('loginPembeli', [AuthController::class, 'loginPembeli']);
Route::post('loginPembeliAction', [AuthController::class, 'loginPembeliAction']);

//Register
Route::get('register', [AuthController::class, 'register']);
Route::post('registerAction', [AuthController::class, 'registerAction']);

//Dashboard Admin
Route::get('dashboardAdmin', [AuthController::class, 'dashboardAdmin']);
Route::get('product', [ProductController::class, 'index']);
Route::get('product/show/{id}', [ProductController::class, 'show']);
Route::get('product/edit/{id}', [ProductController::class, 'edit']);
Route::post('product/update/{id}', [ProductController::class, 'update']);
Route::delete('product/delete/{id}', [ProductController::class, 'destroy']);
Route::get('inputProduct', [AuthController::class, 'inputProduct']);
Route::post('inputProduct_action', [AuthController::class, 'inputProduct_action']);

//Dashboard Pembeli
Route::get('dashboardPembeli', [AuthController::class, 'dashboardPembeli']);
Route::get('User', [AuthController::class, 'indexPembeli']);
Route::get('User/show/{id}', [AuthController::class, 'showPembeli']);
Route::get('userProfilling', [AuthController::class, 'userProfilling']);

//Checkout
Route::get('dashboardCheckout', [AuthController::class, 'dashboardCheckout']);
Route::post('addCartAction', [AuthController::class, 'addCartAction']);
Route::get('addCart', [AuthController::class, 'addCart']);
Route::get('checkout', [CheckoutController::class, 'indexCheckout']);

//Review
Route::get('reviewCustomer', [AuthController::class, 'reviewCustomer']);
Route::post('ReviewAction', [AuthController::class, 'ReviewAction']);
Route::get('indexReview', [ReviewController::class, 'indexReview']);
Route::get('showReview', [ReviewController::class, 'showReview']);