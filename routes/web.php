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
Route::get('/','HomeController@index')->name('home');
Route::get('/admin/login','HomeController@getLoginAdmin')->name('admin-login');
Route::post('admin/login', 'HomeController@postLoginAdmin')->name('post-login');
Route::prefix('admin')->group(function(){

	Route::prefix('category')->group(function(){	

		Route::get('/','CategoryController@index')->name('index-category');
		Route::get('/create','CategoryController@create')->name('create-category');
		Route::post('/store','CategoryController@store')->name('store-category');
		Route::get('/edit/{id}','CategoryController@edit')->name('edit-category');
		Route::put('/update{id}','CategoryController@update')->name('update-category');
		Route::delete('/delete/{id}','CategoryController@update')->name('delete-category');

	});

	Route::prefix('product')->group(function(){	

		Route::get('/','ProductController@index')->name('index-product');
		Route::get('/create','ProductController@create')->name('create-product');
		Route::post('/store','ProductController@store')->name('store-product');
		Route::get('/edit/{id}','ProductController@edit')->name('edit-product');
		Route::put('/update{id}','ProductController@update')->name('update-product');
		Route::delete('/delete/{id}','ProductController@update')->name('delete-product');
		
	});

	Route::prefix('user')->group(function(){	

		Route::get('/','UserController@index')->name('index-user');
		Route::get('/create','UserController@create')->name('create-user');
		Route::post('/store','UserController@store')->name('store-user');
		Route::get('/edit/{id}','UserController@edit')->name('edit-user');
		Route::put('/update{id}','UserController@update')->name('update-user');
		Route::delete('/delete/{id}','UserController@update')->name('delete-user');
		
	});

	Route::prefix('order')->group(function(){	

		Route::get('/','OrderController@index')->name('index-order');
		Route::get('/create','OrderController@create')->name('create-order');
		Route::post('/store','OrderController@store')->name('store-order');
		Route::get('/edit/{id}','OrderController@edit')->name('edit-order');
		Route::put('/update{id}','OrderController@update')->name('update-order');
		Route::delete('/delete/{id}','OrderController@update')->name('delete-order');
		
	});

});

Route::get('contact-us', 'ContactController@formContact')->name('form-contact');
Route::post('contact-us', 'ContactController@sendMail')->name('send-contact');



Route::get('/cate/{id}/product', 'HomeController@listCate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::
ddddd: