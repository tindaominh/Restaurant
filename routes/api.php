<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => '/'], function () {
    Route::group(['namespace'=>'API'], function(){
        // order
        Route::get('order', 'OrderController@index');
        Route::get('order/{id}', 'OrderController@show');
        Route::post('order', 'OrderController@store');
        Route::put('order/{id}', 'OrderController@update');
        Route::delete('order/{id}', 'OrderController@delete');
        //customer
        Route::get('customer', 'CustomerController@index');
        Route::get('customer/{id}', 'CustomerController@show');
        Route::post('customer', 'CustomerController@store');
        Route::put('customer/{id}', 'CustomerController@update');
        Route::delete('customer/{id}', 'CustomerController@delete');
        //menu
        Route::get('menu', 'MenuController@index');
        Route::get('menu/{id}', 'MenuController@show');
        Route::post('menu', 'MenuController@store');
        Route::put('menu/{id}', 'MenuController@update');
        Route::delete('menu/{id}', 'MenuController@delete');
        //payment
        Route::get('payment', 'PaymentController@index');
        Route::get('payment/{id}', 'PaymentController@show');
        Route::post('payment', 'PaymentController@store');
        Route::put('payment/{id}', 'PaymentController@update');
        Route::delete('payment/{id}', 'PaymentController@delete');
    });
});