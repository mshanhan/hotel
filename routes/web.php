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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','AdminController@index');
#前台
Route::prefix('/index')->group(function(){
    Route::get('index','IndexController@index');//前台首页
    Route::get('booking','IndexController@booking');//查找酒店
    Route::get('bookings','IndexController@bookings');//查找民宿
    Route::get('contact','IndexController@contact');//酒店联系方式
    Route::get('details','IndexController@details');//酒店介绍
    Route::get('detail','IndexController@detail');//民宿介绍
    Route::get('leixing','IndexController@leixing');//酒店类型介绍
    Route::get('leixings','IndexController@leixings');//民宿类型介绍
    Route::get('payment','IndexController@payment');//入住人员登记
    Route::get('payments','IndexController@payments');//注册会员
    Route::get('reservation','IndexController@reservation');//保留房间
    Route::get('rooms','IndexController@rooms');//房间设施介绍
    Route::get('search','IndexController@search');//酒店房间排行
    Route::get('destination','IndexController@destination');//民宿推荐
    Route::get('xufei','IndexController@xufei');//续费房间
});
//导航栏
Route::prefix('/navbar')->group(function(){
    Route::get('add','NavbarController@add');//添加视图
    Route::any('adddo','NavbarController@adddo');//执行添加
    Route::any('list','NavbarController@list');//执行添加
    Route::any('del','NavbarController@del');//删除
    Route::any('update/{id}','NavbarController@update');//修改
    Route::any('doupdate','NavbarController@doupdate');//执行修改
});