<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Models\Fruit;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('fruits/{fruit}/create_review', [FruitController::class, 'createReview']);
Route::resource('fruits', FruitController::class);

Route::resource('reviews', ReviewController::class);
