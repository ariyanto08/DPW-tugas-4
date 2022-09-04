<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
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



Route::get('signup', function () {
    return view('template.signup');
});

// login
Route::get('login', [AuthController::class,'showLogin']); 

//admin
Route::get('product', [ProductController::class,'index']);
Route::get('base', [HomeController::class,'showBase']); 
Route::get('dashboard', [HomeController::class,'showDashboard']);
Route::get('categories', [HomeController::class,'showCategories']); 
Route::get('product/create', [ProductController::class,'create']);
Route::post('product', [ProductController::class,'store']);
Route::get('product/{product}', [ProductController::class,'show']);
Route::get('product/{product}/edit', [ProductController::class,'edit']);
Route::put('product/{product}', [ProductController::class,'update']);
Route::delete('product/{product}', [ProductController::class,'destroy']);

//template e-commerce
Route::get('/', [ClientController::class,'showHome']);
Route::get('home', [ClientController::class,'showHome']);
Route::get('shop', [ClientController::class,'showShop']);
Route::get('about', [ClientController::class,'showAbout']);
Route::get('contact', [ClientController::class,'showContact']);
Route::get('cart', [ClientController::class,'showCart']);
Route::get('produk/{product}', [ClientController::class,'showDetail']);
Route::get('shoping', [ClientController::class,'showShoping']);
