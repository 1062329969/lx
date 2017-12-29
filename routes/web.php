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

Route::any('/wechat', 'WechatController@serve');
//RRoute::any('/wechat', 'WechatController@serve');
Route::any('dede','WechatController@dede');

//微信菜单
Route::any('news','FromController@index');

//模板消息
Route::any('model','FromController@modelx');

//用户管理
Route::any('user','FromController@user');