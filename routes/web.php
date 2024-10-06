<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\UserCustomerAuthController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User Customer

Route::prefix('user/auth')->group(function () {
    Route::get('/signup', [UserCustomerAuthController::class, 'showSignupForm'])->name('user_customer.signup');
    Route::post('/signup', [UserCustomerAuthController::class, 'signup']);

    Route::get('/login', [UserCustomerAuthController::class, 'showLoginForm'])->name('user_customer.login');
    Route::post('/login', [UserCustomerAuthController::class, 'login']);
});

Route::middleware(['auth:user_customer'])->group(function () {
    Route::get('/user/dashboard', [DashboardUserController::class, 'index'])->name('user_customer.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('shipping', ShippingController::class);

    Route::get('/reports', function () {
        return view('dashboard.reports');
    });
});

Route::get('/user', function () {
    return view('user/user');
});

Route::get('/tracking', function () {
    return view('user/tracking');
});
