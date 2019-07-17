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

// Route::get('/','HomeController@index')->name('home');

// Route::get('/category','CategoryController@index')->name('index-category');
Route::get('admin/login', 'AdminController@getLoginAdmin')->name('getlogin');
Route::post('admin/login', 'AdminController@postLoginAdmin')->name('postlogin');
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'category'], function(){
		Route::get('index', 'CategoryController@index')->name('list-cate');
		Route::get('create', 'CategoryController@create')->name('add-new-cate');
	});
});