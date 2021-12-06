<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/product', [ProductController::class, 'index']);

// Route::post('/product', [ProductController::class, 'store']);


// public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Route::resource('product', ProductController::class);
// Route::get('/product/search/{name}', [ProductController::class, 'search']);



// protected routes
Route::middleware('auth:sanctum')->get('/product/search/{name}', [ProductController::class, 'search']);
Route::middleware('auth:sanctum')->resource('/product', ProductController::class);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
