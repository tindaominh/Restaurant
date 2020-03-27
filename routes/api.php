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

Route::get('menu', 'APIMenuController@index');
Route::get('menu/{id}', 'APIMenuController@show');
Route::post('menu', 'APIMenuController@store');
Route::put('menu', 'APIMenuController@update');
Route::delete('menu', 'APIMenuController@delete');

Route::get('order', 'APIOrderController@index');
Route::get('order/{id}', 'APIOrderController@show');
Route::post('order', 'APIOrderController@store');
Route::put('order', 'APIOrderController@update');
Route::delete('order', 'APIOrderController@delete');

Route::get('customer', 'APICustomerController@index');
Route::get('customer/{id}', 'APICustomerController@show');
Route::post('customer', 'APICustomerController@store');
Route::put('customer', 'APICustomerController@update');
Route::delete('customer', 'APICustomerController@delete');
