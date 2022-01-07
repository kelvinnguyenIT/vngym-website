<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Home\HomeController;
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

// **--------------------ADMIN--------------------------**


Route::get('/', [HomeController::class,'homepage'])->name('homepage');

Route::get('/login', function () {
    return view('Home.login');
})->name('login');

Route::get('/view_supplement', [HomeController::class,'view_supplement'])->name('view_supplement');

Route::get('/detail_supplement/{product:slug}', [HomeController::class,'detail_supplement'])->name('detail_supplement');

Route::get('/view_cart/{user_id}', [HomeController::class,'view_cart'])->name('view_cart');

Route::post('/verify-user',[LoginController::class,'verifyUser'])->name('verify-user');

Route::post('/addCart',[HomeController::class,'addCart'])->name('addCart');

Route::post('/payment-product',[HomeController::class,'paymentProduct'])->name('paymentProduct');

Route::middleware('verify-user')->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin/index');
    })->name('dashboard');
    Route::resources([
        'product'=> ProductController::class,
        'image-product'=> ImageController::class,
        'order'=> OrderController::class,
    ]);
    Route::get('/logout-admin', function () {
        Auth::logout();
        session()->flush();
        return redirect('/');
    })->name('logout-admin');
});

