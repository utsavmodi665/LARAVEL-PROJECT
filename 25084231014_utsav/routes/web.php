<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[ProductController::class,'index']);

Route::post('/add-product',[ProductController::class,'store']);

Route::get('/edit/{id}',[ProductController::class,'edit']);

Route::post('/update/{id}',[ProductController::class,'update']);

Route::get('/delete/{id}',[ProductController::class,'destroy']);
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

/*Route::get('/', function () {
    return view('welcome');
});
*/