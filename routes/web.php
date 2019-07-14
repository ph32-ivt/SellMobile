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

Route::prefix('category')->group(function(){
	
	Route::get('/category','CategoryController@index')->name('index-category');
	Route::get('getDataCategory','CategoryController@getDataCategory');
	Route::get('formCatgory','CategoryController@formCategory');
	Route::get('createCategory','CategoryController@createCategory')->name('create-category');


});


