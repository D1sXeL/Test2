<?php

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

Route::get('/', [App\Http\Controllers\PracticeController::class, 'index']);


Route::match(['get', 'post'], '/admin/',[App\Http\Controllers\PracticeController::class,'adminka'])->middleware('admin');
Route::match(['get', 'post'], '/admin/product/add/', [App\Http\Controllers\PracticeController::class,'adminProductAdd'])->middleware('admin');
Route::match(['get', 'post'], '/admin/category/add/', [App\Http\Controllers\PracticeController::class,'adminCategoryAdd'])->middleware('admin');
Route::match(['get', 'post'], '/catalog/',[App\Http\Controllers\PracticeController::class,'catalog']);
Route::match(['get', 'post'], '/catalog/{id}',[App\Http\Controllers\PracticeController::class,'catalogId']);
Route::get('/geolocation/', [App\Http\Controllers\PracticeController::class,'geolocation']);
Route::match(['get', 'post'], '/basket/',[App\Http\Controllers\PracticeController::class,'basket']);
Route::match(['get', 'post'], '/check/',[App\Http\Controllers\PracticeController::class,'check']);
Route::match(['get', 'post'], '/confirm/{id}',[App\Http\Controllers\PracticeController::class,'confirm'])->middleware('admin');
Route::match(['get', 'post'], '/cancel/{id}',[App\Http\Controllers\PracticeController::class,'cancel'])->middleware('admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\PracticeController::class, 'index'])->name('home');
