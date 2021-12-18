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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/firms', 'App\Http\Controllers\MainController@firms')->name('firms');
Route::get('/basket/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
Route::post('/basket/place', 'App\Http\Controllers\BasketController@basketaccepted')->name('basket-accepted');

Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');

Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/empty', 'App\Http\Controllers\BasketController@empty')->name('empty');


Route::get('/{firm}', 'App\Http\Controllers\MainController@firm')->name('firm');
Route::get('/{firm}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');
