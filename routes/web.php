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
// Route::get('/', function () {
// 	return view('welcome');



// });
Route::get('/','User\HomeController@index')->name('home');
Route::get('/admin/login','HomeController@getLoginAdmin')->name('admin-login');
Route::post('/admin/login', 'HomeController@postLoginAdmin')->name('post-login');
Route::prefix('admin')->group(function(){

	Route::prefix('category')->group(function(){	

		Route::get('/','CategoryController@index')->name('index-category');
		Route::get('/create','CategoryController@create')->name('create-category');
		Route::post('/','CategoryController@store')->name('store-category');
		Route::get('/{id}/edit','CategoryController@edit')->name('edit-category');
		Route::get('/{id}','CategoryController@show')->name('show-category');
		Route::put('/{id}','CategoryController@update')->name('update-category');
		Route::get('/{id}/delete','CategoryController@destroy')->name('delete-category');
		Route::get('/history/category/','CategoryController@history')->name('history-category');
		Route::get('/forceDelete/{id}','CategoryController@forceDelete')->name('forceDelete-category');

	});

	Route::prefix('product')->group(function(){	
		Route::get('/','ProductController@index')->name('index-product');
		Route::get('/create','ProductController@create')->name('create-product');
		Route::post('/','ProductController@store')->name('store-product');
		Route::get('/{id}/edit','ProductController@edit')->name('edit-product');
		Route::put('/{id}','ProductController@update')->name('update-product');
		Route::get('/delete/{id}','ProductController@destroy')->name('delete-product');
		Route::get('/{action}/{id}','ProductController@action')->name('get-action-product');		
		Route::get('/{id}','ProductController@show')->name('show-product');
		
	});

	Route::prefix('user')->group(function(){	

		Route::get('/','UserController@index')->name('index-user');
		Route::get('/create','UserController@create')->name('create-user');
		Route::post('/','UserController@store')->name('store-user');
		Route::get('/{id}','UserController@show')->name('show-user');
		Route::get('/edit/{id}','UserController@edit')->name('edit-user');
		Route::put('/update{id}','UserController@update')->name('update-user');
		Route::delete('/delete/{id}','UserController@destroy')->name('delete-user');
		
	});

	Route::prefix('order')->group(function(){	

		Route::get('/','OrderController@index')->name('index-order');
		Route::get('/create','OrderController@create')->name('create-order');
		Route::post('/store','OrderController@store')->name('store-order');
		Route::get('/edit/{id}','OrderController@edit')->name('edit-order');
		Route::put('/update{id}','OrderController@update')->name('update-order');
		Route::delete('/delete/{id}','OrderController@destroy')->name('delete-order');
	});

});



Route::get('contact', 'User\ContactController@formContact')->name('form-contact');
Route::post('contact', 'User\ContactController@sendMail')->name('send-contact');

// Route::get('product_hot','HomeController@prohot')->name('prohot');
Route::get('products/{id}','User\HomeController@show')->name('show-product');
Route::get('probycate/{id}','User\HomeController@show_product_by_category')->name('showbycate');
Route::get('/register', 'User\HomeController@register')->name('register-user');
Route::post('/register', 'User\HomeController@postRegister')->name('postRegister');
Route::get('/userlogin','User\HomeController@login')->name('userlogin');
Route::post('/userlogin','User\HomeController@postLogin')->name('postLoginuser');	
Route::get('/logout','User\HomeController@logout')->name('logout');




Route::get('/cart', 'User\CartController@getCart')->name('getCart');
Route::post('/addCart/{id}', 'User\CartController@addCart')->name('addCart');
// Route::post('/addCartOne', 'CartController@addcartOne')->name('addcartOne');
Route::post('/updateCart', 'User\CartController@updateCart')->name('updateCart');
Route::post('/removeCart','User\CartController@removeCart')->name('removeCart');
// Route::get('/orderConfirm', 'CartController@orderConfirm')->name('orderConfirm');
// Route::post('/orderPay', 'CartController@orderPay')->name('orderPay');
Route::get('/order','User\OrderController@getorder')->name('getorder');	
Route::post('order','User\OrderController@store')->name('addorder');
Route::get('view-order','User\OrderController@view_order')->name('vieworder');

// Route::get('/search', 'SearchController@search');
Route::get('/search', 'User\SearchController@search')->name('search');

Route::post('/comment','User\CommentController@create')->name('createcmt');

