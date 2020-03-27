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
    Route::get('/trang-chu', 'Controller@trang_chu');

    //menu
    Route::get('/all-menu', 'MenuController@all_menu');


    Route::get('order', 'OrderController@index')->name('order');
    Route::get('order/add/{id}', 'OrderController@order_add');
    Route::post('order/add/{id}', 'OrderController@add_order');
    Route::post('order', 'OrderController@store');
    Route::get('order/view/{id}','OrderController@show');
    Route::post('order/view/{id}', 'OrderController@view_add');

    route::get('order/edit/{id}','OrderController@edit')->name('order_edit');
    route::put('order/edit/{id}', 'OrderController@update');
    Route::get('order/delete/{id}', 'OrderController@destroy');

    Route::get('order/payment/{id}','PaymentController@payment');

    //
    

    // Route::get('customer', 'CustomerController@index')->name('customer');
    Route::get('customer/add', 'CustomerController@create')->name('customer_add');
    Route::post('customer/add', 'CustomerController@store');
    route::get('customer/edit/{id}', 'CustomerController@edit')->name('customer_edit');
    route::put('customer/edit/{id}', 'CustomerController@update');
    Route::get('customer/delete/{id}', 'CustomerController@destroy');

    

    Route::get('/trang-chu', 'Controller@trang_chu');
    //login
    Route::get('/login', 'LoginController@login');
    Route::post('/check-login', 'LoginController@check_login');
    Route::get('/log-out', 'LoginController@log_out');

    //admin

    //Menu
    Route::get('/admin-all-menu', 'MenuadController@admin_all_menu');
    route::get('/admin-add-menu', 'MenuadController@admin_add_menu');
    Route::post('/save-menu', 'MenuadController@save_menu');
    Route::get('/edit-menu/{menu_id}', 'MenuadController@edit_menu');
    Route::get('/delete-menu/{menu_id}', 'MenuadController@delete_menu');
    route::post('/edit-menu-select/{menu_id}', 'MenuadController@edit_menu_select');
});

Route::get('/home', 'HomeController@index')->name('home');
