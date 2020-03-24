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


