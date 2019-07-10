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
    return view('welcome');
});

Route::any('login','YueController@login');
Route::any('zt','YueController@zt');
Route::any('fy','YueController@fy');
Route::any('tian','YueController@tian');
Route::any('del','YueController@del');
Route::any('add','XiaoController@add');
Route::any('doadd','XiaoController@doadd');
Route::any('show','XiaoController@show');
Route::any('xiang','XiaoController@xiang');
Route::any('dell','XiaoController@dell');
Route::any('selname','XiaoController@selname');
Route::get('sui','XiaoController@sui');