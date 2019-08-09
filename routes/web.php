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


Route::get('/', 'User\HomeController@index')->name('home');

Auth::routes();

Route::group([
	'middleware' => ['auth','is.Admin'],
	'prefix'     => 'admin',
], function () {
	Route::get('/home','HomeAdminController@index')->name('home-admin');

	Route::get('/category/','CategoryController@index')->middleware('CheckAcl:view-category')->name('index-category');

	Route::get('/category/create','CategoryController@create')->middleware('CheckAcl:create-category')->name('create-category');
	
	Route::post('/category','CategoryController@store')->name('store-category');
	
	Route::get('/category/{id}/edit','CategoryController@edit')->middleware('CheckAcl:edit-category')->name('edit-category');
	
	Route::get('/category/{id}','CategoryController@show')->name('show-category');
	
	Route::put('/category/{id}','CategoryController@update')->name('update-category');
	
	Route::get('/category/{id}/delete','CategoryController@destroy')->middleware('CheckAcl:delete-category')->name('delete-category');
	
	Route::get('/category/show/history/','CategoryController@history')->middleware('CheckAcl:history-category')->name('history-category');
	
	Route::get('/category/forceDelete/{id}','CategoryController@forceDelete')->name('forceDelete-category');
	
	Route::get('/category/{id}/restore','CategoryController@restore')->name('restore-category');






	Route::get('/product/','ProductController@index')->middleware('CheckAcl:view-product')->name('index-product');

	Route::get('/product/create','ProductController@create')->middleware('CheckAcl:create-product')->name('create-product');

	Route::post('/product/','ProductController@store')->name('store-product');

	Route::get('/product/{id}/edit','ProductController@edit')->middleware('CheckAcl:edit-product')->name('edit-product');

	Route::put('/product/{id}','ProductController@update')->name('update-product');

	Route::get('/product/delete/{id}','ProductController@destroy')->middleware('CheckAcl:delete-product')->name('delete-product');

	Route::get('/product/{action}/{id}','ProductController@action')->middleware('CheckAcl:action-product')->name('get-action-product');

	Route::get('/product/{id}','ProductController@show')->name('show-product-admin');






	Route::get('/user/','UserController@index')->name('index-user');

	Route::get('/user/create','UserController@create')->middleware('CheckAcl:create-user')->name('create-user');

	Route::post('/user/','UserController@store')->name('store-user');

	Route::get('/user/{id}','UserController@show')->middleware('CheckAcl:view-user')->name('show-user');

	Route::get('/user/edit/{id}','UserController@edit')->middleware('CheckAcl:edit-user')->name('edit-user');

	Route::put('/user/update{id}','UserController@update')->name('update-user');

	Route::get('/user/{id}/delete','UserController@destroy')->middleware('CheckAcl:delete-user')->name('delete-user');

	


	

	Route::get('/role/create/','RoleController@create')->middleware('CheckAcl:create-role')->name('create-role');

	Route::post('/role/','RoleController@store')->name('store-role');

	Route::get('/role/{id}/edit/','RoleController@edit')->middleware('CheckAcl:edit-role')->name('edit-role');

	Route::put('/role/{id}/','RoleController@update')->name('update-role');

	Route::get('/role/{id}/','RoleController@destroy')->middleware('CheckAcl:delete-role')->name('destroy-role');





	Route::get('/order/','OrderController@index')->middleware('CheckAcl:view-order')->name('index-order');

	Route::get('/order/{id}/delete','OrderController@destroy')->middleware('CheckAcl:delete-order')->name('delete-order');

	Route::get('/order/argee','OrderController@getAgree')->middleware('CheckAcl:view-category')->name('order-da-duyet');

	Route::get('/order/disAgree','OrderController@getDisAgree')->middleware('CheckAcl:view-category')->name('order-disAgree');

	Route::get('/order/{id}/duyet','OrderController@browseOrder')->middleware('CheckAcl:browser-order')->name('duyet.don.hang');

	Route::get('/order/{id}','OrderController@show')->middleware('CheckAcl:view-category')->name('show-order-detail');

	Route::get('/order/show/history','OrderController@showHistoryOrder')->middleware('CheckAcl:history-order')->name('order-show-history');

	Route::get('/order/{id}/history-order-detail','OrderController@showHistoryOrderDetail')->name('history-order-detail');

	Route::get('/order/{id}/restore','OrderController@restore')->name('restore-history-order');

	Route::get('/order/{id}/forceDelete','OrderController@forceDelete')->name('forceDelete-history-order');	
	Route::get('/orderDetail/{id}/delete','OrderController@deleteOrderDetail')->name('delete-oderDetail');	





	Route::get('/silder/','SlidesController@index')->name('index-slider');

	Route::get('/silder/create','SlidesController@create')->middleware('CheckAcl:create-slide')->name('create-slider');

	Route::post('/silder/','SlidesController@store')->name('store-slider');

	Route::get('/slider/{id}/update/status','SlidesController@upadateStatusSlide')->middleware('CheckAcl:view-category')->name('update-status-slide');

	Route::get('/silder/{id}','SlidesController@destroy')->middleware('CheckAcl:delete-slide')->name('destroy-silder');



	Route::get('/comment/','CommentController@index')->name('index-comment');
	Route::get('/comment/{id}','CommentController@destroy')->name('destroy-comment');

});




Route::get('contact', 'User\ContactController@formContact')->name('form-contact');
Route::post('contact', 'User\ContactController@sendMail')->name('send-contact');


Route::get('products/{id}','User\HomeController@show')->name('show-product');
Route::get('probycate/{id}','User\HomeController@show_product_by_category')->name('showbycate');
Route::get('/register', 'User\HomeController@register')->name('register-user');
Route::post('/register', 'User\HomeController@postRegister')->name('postRegister');
Route::get('/userlogin','User\HomeController@login')->name('userlogin');
Route::post('/userlogin','User\HomeController@postLogin')->name('postLoginuser');	
Route::get('/logout','User\HomeController@logout')->name('logout');




Route::get('/cart', 'User\CartController@getCart')->name('getCart');
Route::post('/addCart/{id}', 'User\CartController@addCart')->name('addCart');

Route::post('/updateCart', 'User\CartController@updateCart')->name('updateCart');
Route::post('/removeCart','User\CartController@removeCart')->name('removeCart');

Route::get('/order','User\OrderController@getorder')->name('getorder');	
Route::post('order','User\OrderController@store')->name('addorder');
Route::get('view-order','User\OrderController@view_order')->name('vieworder');




Route::get('/search', 'User\SearchController@search')->name('search');
// Route::get('/form-comment','User\CommentController@getLoadFormComment')->name('load-form-comment');
Route::post('/comment','User\CommentController@create')->name('createcmt');




// Route::get('/reply/{id}','User\CommentController@replyForm')->name('reple-form');
Route::post('/reply-comment','User\CommentController@replyComment')->name('reply-comment');

Route::get('profile/','User\HomeController@profile_manage')->name('profile_manage');
Route::put('/profile/{id}','User\HomeController@update_profile')->name('update_profile');

Route::get('/change_password/','User\HomeController@change_password')->name('change_password');
Route::put('/change_password/{id}','User\HomeController@update_change_password')->name('update_password');



