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


//平台路由admin.ele.com
Route::domain('admin.ele.com')->namespace('Admin')->group(function () {
    //店铺分类 route('路径'，‘控制器/方法’)
    Route::get('shop_category/index',"ShopCategoryController@index")->name('shop_category.index');
    Route::any('shop_category/add',"ShopCategoryController@add")->name('shop_category.add');
    Route::any('shop_category/edit/{id}',"ShopCategoryController@edit")->name('shop_category.edit');
    Route::get('shop_category/del/{id}',"ShopCategoryController@del")->name('shop_category.del');

    //商家人管理
    Route::get('shop_user/index',"ShopUserController@index")->name('shop_user.index');
    Route::any('shop_user/add',"ShopUserController@add")->name('shop_user.add');
    Route::any('shop_user/edit/{id}',"ShopUserController@edit")->name('shop_user.edit');
    Route::get('shop_user/del/{id}',"ShopUserController@del")->name('shop_user.del');
    Route::any('shop_user/clear/{id}',"ShopUserController@clear")->name('shop_user.clear');
    //商家信息管理
    Route::get('shop_info/index',"ShopInfoController@index")->name('shop_info.index');
    Route::any('shop_info/reg',"ShopInfoController@reg")->name('shop_info.reg');
    Route::any('shop_info/edit/{id}',"ShopInfoController@edit")->name('shop_info.edit');
    Route::get('shop_info/del/{id}',"ShopInfoController@del")->name('shop_info.del');
    Route::get('shop_info/see/{id}',"ShopInfoController@see")->name('shop_info.see');
    Route::get('shop_info/pp',"ShopInfoController@pp")->name('shop_info.pp');
    //平台管理员
    Route::get('user/index',"UserController@index")->name('user.index');
    Route::any('user/add',"UserController@add")->name('user.add');
    Route::any('user/edit/{id}',"UserController@edit")->name('user.edit');
    Route::get('user/del/{id}',"UserController@del")->name('user.del');
    Route::any('user/check/{id}',"UserController@check")->name('user.check');
    Route::any('user/login',"UserController@login")->name('user.login');
    Route::any('user/logout',"UserController@logout")->name('user.logout');



});

//商家shop.ele.com
Route::domain('shop.ele.com')->namespace('Shop')->group(function () {
//商家注册
    Route::any('user/reg',"UserController@reg")->name('user.reg');
    Route::any('user/joins',"UserController@joins")->name('user.joins');



});

//用户路由（前端）
