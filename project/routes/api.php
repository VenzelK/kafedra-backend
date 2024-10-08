<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


/**
 * 
 * 
 * @api Session
 * 
 * 
 */


Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);

/**
 * 
 * 
 * @api Products
 * 
 * 
 */


Route::post('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::post('/product', [ProductController::class, 'store'])->middleware(AdminMiddleware::class);

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->middleware(AdminMiddleware::class);

Route::patch('/product/{id}', [ProductController::class, 'update'])->middleware(AdminMiddleware::class);

/**
 * 
 * 
 * @api Cart
 * 
 * 
 */

Route::get('/cart', [CartController::class, 'index']);

Route::post('/cart/{id}', [CartController::class, 'store']);

Route::delete('/cart/{id}', [CartController::class, 'destroy']);


/**
 * 
 * 
 * @api Order
 * 
 * 
 */


Route::get('/order', [OrderController::class, 'index']);

Route::post('/order', [OrderController::class, 'store']);