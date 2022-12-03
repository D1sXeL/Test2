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

Route::get('/test/show/',[App\Http\Controllers\test::class,'show']);
Route::get('/test/showB/',[App\Http\Controllers\test::class,'showB']);

Route::get('/employee/{user}',[App\Http\Controllers\test::class,'showOne']);
Route::get('/employee/{user}/{field}',[App\Http\Controllers\test::class,'showField']);
Route::get('/ara',[App\Http\Controllers\test::class,'ara']);
Route::get('/city/{gorod?}',[App\Http\Controllers\test::class,'city']);
Route::get('/location/{country?}/{gorod?}',[App\Http\Controllers\test::class,'location'] );
route::get('/dat',[App\Http\Controllers\test::class,'dat'] );
route::get('/age',[App\Http\Controllers\test::class,'age'] );
route::get('/mas',[App\Http\Controllers\test::class,'mas'] );
route::get('/rab',[App\Http\Controllers\test::class,'rab'] );
route::get('/maw',[App\Http\Controllers\test::class,'maw'] );
route::get('/tovar',[App\Http\Controllers\test::class,'tovar'] );
route::get('/link',[App\Http\Controllers\test::class,'link'] );
route::get('/emp',[App\Http\Controllers\test::class,'emp'] );
route::get('/use',[App\Http\Controllers\test::class,'use'] );
route::get('/spi',[App\Http\Controllers\test::class,'spi'] );
route::get('/date',[App\Http\Controllers\test::class,'date'] );
route::get('/post/{id}',[App\Http\Controllers\post::class,'post'] );
route::get('/showProduct/{Cid}/{Pid}',[App\Http\Controllers\product::class,'showProduct'] );
route::get('/categories',[App\Http\Controllers\product::class,'showCategory'] );
route::get('/categories/{id}',[App\Http\Controllers\product::class,'showCategoryList'] );


route::get('/form',[App\Http\Controllers\text::class,'form'] );
route::post('/text/result',[App\Http\Controllers\text::class,'result'] );
Route::match(['get', 'post'], '/pg', [App\Http\Controllers\text::class,'pg'] );
Route::match(['get', 'post'],'/all',[App\Http\Controllers\text::class,'all'] );


Route::match(['get', 'post'],'/all',[App\Http\Controllers\text::class,'dfgdfg'] );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/hj',[App\Http\Controllers\text::class,'hj'] );