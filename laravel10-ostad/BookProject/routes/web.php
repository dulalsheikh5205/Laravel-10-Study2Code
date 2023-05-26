<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// hasinHyder module-13
Route::get('/books',[BookController::class,'books']);
Route::get('/books/{id}',[BookController::class,'getBook']);
Route::get('/books/{id}',[BookController::class,'getBook'])->whereNumber('id');
Route::get('/books/{id}/{field}',[BookController::class,'getBookField']);
// Route::get('/books/{id}/author',[BookController::class,'getBookAuthor']);
// Route::get('/books/{id}/title',[BookController::class,'getBookTitle']);

Route::get('/weather/{city}',[WeatherController::class,'getWeather']);
