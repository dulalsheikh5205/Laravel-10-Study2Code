<?php

use App\Http\Controllers\BookController;
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
Route::get('/books/{id}/author',[BookController::class,'getBookAuthor']);
Route::get('/books/{id}/title',[BookController::class,'getBookTitle']);
