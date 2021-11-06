<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'pagetitle' => 'Welcome Home']);
});

Route::resource('fruits', FruitController::class);

Route::resource('reviews', ReviewController::class);
