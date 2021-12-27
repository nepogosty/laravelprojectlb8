<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Person\OrderController as PersonOrderController;
use App\Http\Controllers\OrderController as AdminOrderController;

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
Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function (){
    Route::group([



    ],function(){

        Route::get('/person/home', [PersonOrderController::class, 'index'])->name('orders.index');
        Route::get('/person/home/{order}', 'App\Http\Controllers\OrderController@show')->name('ordersss.show');
    });

    Route::group([

        'prefix'=>'admin'
    ],function() {
        Route::group(['middleware' => 'is_admin'], function () {
            Route::get('/home', 'App\Http\Controllers\OrderController@index')->name('home');
            Route::get('/home/parser', 'App\Http\Controllers\OrderController@parser')->name('parser');
            Route::get('/home/{order}', 'App\Http\Controllers\OrderController@show')->name('orders.show');
        });

        Route::resource('firms', 'App\Http\Controllers\ResourceController\FirmController');
        Route::resource('laptops', 'App\Http\Controllers\ResourceController\LaptopController');

    });
});

/*Route::group(['middleware'=>'auth'],function(){
    Route::group(['middleware'=>'is_admin'], function (){
        Route::get('/home','App\Http\Controllers\OrderController@index')->name('home');
    });

    Route::resource('firms','FirmController');
});
*/
Route::get('/logout','App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');
Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/firms', 'App\Http\Controllers\MainController@firms')->name('firms');

Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::group(['middleware'=>'basket_not_empty'],function(){
    Route::get('/basket/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
    Route::post('/basket/place', 'App\Http\Controllers\BasketController@basketaccepted')->name('basket-accepted');

    Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
    Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
});



Route::get('/empty', 'App\Http\Controllers\BasketController@empty')->name('empty');


Route::get('/{firm}', 'App\Http\Controllers\MainController@firm')->name('firm');

Route::get('/{firm}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
