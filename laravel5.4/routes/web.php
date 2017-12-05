<?php

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
    return view('message/add');
});

Route::any("add","IndexController@add");
Route::any("show","IndexController@show");
Route::any("index","IndexController@index");
Route::any("delete","IndexController@delete");
Route::any("update","IndexController@update");
Route::any("upd","IndexController@upd");




