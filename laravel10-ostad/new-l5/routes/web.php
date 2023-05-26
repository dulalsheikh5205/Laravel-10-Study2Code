<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController; // import

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

// Hasin Hyder
Route::get('/hello', [HelloController::class,'hello']);
Route::get('/helloview',[HelloController::class,'helloView']);
Route::get('/helloview/{name}',[HelloController::class,'helloView']);
