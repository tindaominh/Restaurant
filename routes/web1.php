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


    Route::get('order', 'OrderController@index');
    Route::get('order/add/{id}', 'OrderController@create');
    Route::post('order/add/{id}', 'OrderController@post_addOrder');

    
    Route::get('order/view/{id}','OrderController@show');

    Route::get('order/edit/{id}','OrderController@edit');
    route::put('order/edit/{id}', 'OrderController@update');
    
    Route::get('order/delete/{id}', 'OrderController@destroy');
    Route::get('order/payment/{id}','OrderController@view_payment');

    //
    

    Route::get('customer', 'CustomerController@index');
    Route::get('add-khachhang', 'CustomerController@create');
    Route::post('add-khachhang', 'CustomerController@store');

    Route::get('customer/add', 'CustomerController@get_addCustomer');
    Route::post('customer/add', 'CustomerController@post_addCustomer');

    route::get('customer/view/{id}', 'OrderController@view_tong');

    route::get('customer/them/{id}', 'CustomerController@edit');
    route::put('customer/them/{id}', 'CustomerController@update');
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
