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

    //商家管理
    Route::get('shop_user/index/',"ShopUserController@del")->name('shop_user.index');

});




//商家shop.ele.com
Route::domain('shop.ele.com')->namespace('Shop')->group(function () {

    Route::get('shop/reg',"ShopController@reg");
    Route::get('shop/index',"ShopController@index");

});

//用户路由（前端）
