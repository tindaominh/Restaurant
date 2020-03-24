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
    return view('layout');
});
Route::get('/trang-chu','Controller@trang_chu');

//menu
Route::get('/all-menu','MenuController@all_menu');

//login
Route::get('/login','LoginController@login');
Route::post('/check-login','LoginController@check_login');
Route::get('/log-out','LoginController@log_out');

//admin

//Menu
Route::get('/admin-all-menu','MenuadController@admin_all_menu');
route::get('/admin-add-menu','MenuadController@admin_add_menu');
Route::post('/save-menu','MenuadController@save_menu');
Route::get('/edit-menu/{menu_id}','MenuadController@edit_menu');
Route::get('/delete-menu/{menu_id}','MenuadController@delete_menu');
route::post('/edit-menu-select/{menu_id}','MenuadController@edit_menu_select');




