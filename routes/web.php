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

Route::get('/', [App\Http\Controllers\PracticeController::class, 'exampleOneIndex']);


Route::match(['get', 'post'], '/admin/',[App\Http\Controllers\PracticeController::class,'exampleOne'])->middleware('admin');
Route::match(['get', 'post'], '/admin/add/', [App\Http\Controllers\PracticeController::class,'exampleOneAdminAdd'])->middleware('admin');
Route::match(['get', 'post'], '/catalog/',[App\Http\Controllers\PracticeController::class,'exampleOneCatalog']);
Route::match(['get', 'post'], '/catalog/{id}',[App\Http\Controllers\PracticeController::class,'exampleOneCatalogId']);
Route::get('/geolocation/', [App\Http\Controllers\PracticeController::class,'exampleOneGeolocation']);
Route::match(['get', 'post'], '/basket/',[App\Http\Controllers\PracticeController::class,'exampleOneBasket']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\PracticeController::class, 'exampleOneIndex'])->name('home');
