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
    return view('home1');
});



Route::group(['prefix' => '/'], function () {
    Route::group(['prefix'=>'order/'], function(){
        Route::get('','OrderController@index');
        Route::get('add/{id}', 'OrderController@create');
        Route::post('add/{id}', 'OrderController@store');
        Route::get('edit/{id}', 'OrderController@edit');
        Route::put('edit/{id}', 'OrderController@update');
        Route::get('delete/{id}', 'OrderController@destroy');
    });
    Route::group(['prefix' => 'customer/'], function () {
        Route::get('', 'CustomerController@index');
        Route::get('view/{id}', 'CustomerController@show');
        Route::get('add', 'CustomerController@create');
        Route::post('add', 'CustomerController@store');
        Route::get('edit/{id}', 'CustomerController@edit');
        Route::put('edit/{id}', 'CustomerController@update');
        Route::get('delete/{id}', 'CustomerController@destroy');
    });
    Route::group(['prefix' => 'payment/'], function () {
        Route::get('{id}', 'OrderController@payment');
       // Route::post('{id}', 'OrderController@payment');
    });
    
  
    

    Route::get('/trang-chu', 'Controller@trang_chu');
    //login
    Route::get('/login', 'LoginController@login');
    Route::post('/check-login', 'LoginController@check_login');
    Route::get('/log-out', 'LoginController@log_out');

    //admin

    //Menu
    Route::get('/all-menu', 'MenuController@all_menu');
    Route::get('/admin-all-menu', 'MenuadController@admin_all_menu');
    route::get('/admin-add-menu', 'MenuadController@admin_add_menu');
    Route::post('/save-menu', 'MenuadController@save_menu');
    Route::get('/edit-menu/{menu_id}', 'MenuadController@edit_menu');
    Route::get('/delete-menu/{menu_id}', 'MenuadController@delete_menu');
    route::post('/edit-menu-select/{menu_id}', 'MenuadController@edit_menu_select');
});

Route::get('/home', 'HomeController@index')->name('home');
