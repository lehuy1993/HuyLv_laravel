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
    return view('users.index');
});
Route::get('test', function () {
    return view('test');
});
/*Users*/
Route::post('users/pages/reservations','reservationsController@postReservations')->name('reservations');



/*end*/
/*login admin*/
Route::get('admin/login','adminController@getLogin');
Route::post('admin/login','adminController@postLogin');
Route::get('admin/logout','adminController@getLogout');
/*end*/

Route::group(['prefix'=>'admin'	,'middleware'=>'adminlogin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('add',['as'=>'cate.add.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'cate.add.postAdd','uses'=>'CateController@postAdd']);
		Route::get('list',['as'=>'cate.list','uses'=>'CateController@getList']);
		Route::get('edit/{id}',['as'=>'cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'cate.edit.postEdit','uses'=>'CateController@postEdit']);
		Route::get('del/{id}',['as'=>'cate.getDel','uses'=>'CateController@getDel']);
	});
	/*product*/
	Route::group(['prefix'=>'product'],function(){
		Route::get('add',['as'=>'product.add.getAdd','uses'=>'productController@getAdd']);
		Route::post('add',['as'=>'product.add.postAdd','uses'=>'productController@postAdd']);
		Route::get('list',['as'=>'product.list','uses'=>'productController@getList']);
		Route::get('edit/{id}',['as'=>'product.getEdit','uses'=>'productController@getEdit']);
		Route::post('edit/{id}',['as'=>'product.postEdit','uses'=>'productController@postEdit']);
		Route::get('del/{id}',['as'=>'product.getDel','uses'=>'productController@getDel']);
	});
	/*end*/
	/*user*/
	Route::group(['prefix'=>'user'],function(){
		Route::get('add',['as'=>'user.getAdd','uses'=>'userController@getAdd']);
		Route::post('add',['as'=>'user.postAdd','uses'=>'userController@postAdd']);
		Route::get('list',['as'=>'user.list','uses'=>'userController@getList']);
		Route::get('edit/{id}',['as'=>'user.getEdit','uses'=>'userController@getEdit']);
		Route::post('edit/{id}',['as'=>'user.postEdit','uses'=>'userController@postEdit']);
		Route::get('del/{id}',['as'=>'user.getDel','uses'=>'userController@getDel']);
	});
	/*end*/
	Route::group(['prefix'=>'reservations'],function(){
		Route::get('list',['as'=>'reservations.getlist','uses'=>'reservationsController@getlist']);
		Route::get('del/{id}',['as'=>'reservations.getDel','uses'=>'reservationsController@getDel']);
		Route::post('setting/updaterole',['uses'=>'SettingController@doUpdateAccessRole','as'=>'updateaccessrole']);
	});
	/*menu top*/
	
		Route::resource('menu','MenuController');
		
	
	/*end*/
});

