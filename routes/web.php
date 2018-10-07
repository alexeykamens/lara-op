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
//     return view('welcome');
// });
Route::get('/','MainController@index');
Route::get('/single','MainController@single');
Route::resource('/product','ProductsController', ['only' => ['index', 'show']]);

Route::resource('/category', 'CategoryController', ['only' => ['show']]);
// Route::post('/cart', 'ProductsController@clearCart');
// Route::get('/cart', 'ProductsController@toCart');
Auth::routes();

// Route::get('/home', 'HomeController@index');


// Route::group([
// 	'prefix'=>'admin', 
// 	'namespace'=>'Admin', 
// 	'middleware'=>'role:admin', //регистрация посредника в app\http\kernel , admin- переменная передается в посредник
// 	], 
// 	function(){ //group of controllers
// 		Route::get('/', 'AdminController@dashboard');
// 	}
// );
Route::group(['prefix'=>'adminpanel', 'namespace'=>'Admin', 'middleware' => 'can:accessAdminpanel'], function() {
Route::get('/','AdminController@index');
Route::resource('/products','AdminProductsController');

    // future adminpanel routes also should belong to the group
});


Route::get('/cart','CartController@index');
Route::post('/cart','CartController@store');
Route::delete('/cart','CartController@destroy');
