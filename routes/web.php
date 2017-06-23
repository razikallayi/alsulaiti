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

Route::get('clear-cache',function(){
	Artisan::call('config:clear');
	Artisan::call('view:clear');
	Artisan::call('cache:clear');
	dd('cleared cache files');
});


Route::get('/', 'MasterController@index');
Route::get('category/{slug}', 'MasterController@products');
Route::get('product/{slug}', 'MasterController@productDetail');
Route::get('about', 'MasterController@about');
Route::get('brands', 'MasterController@brands');
Route::get('cart', 'MasterController@cart');
Route::get('privacy', 'MasterController@privacy');
Route::get('terms', 'MasterController@terms');
Route::get('contact', 'MasterController@contact');
Route::post('subscribe', 'MasterController@subscribe');
Route::post('contact', 'MasterController@contactMail');
Route::post('career_mail', 'MasterController@careerMail');
Route::post('product/addtocart','MasterController@addToCart');
Route::post('product/updatecart','MasterController@updateCart');
Route::delete('product/removefromcart','MasterController@removeFromCart');
Route::post('product/checkout','MasterController@checkout');


Route::get('/','MasterController@index');
Route::get('/about', 'MasterController@aboutUs');
Route::get('/training', 'MasterController@training');
Route::get('/services', 'MasterController@services');
Route::get('/events', 'MasterController@events');
Route::get('/publications', 'MasterController@publications');
Route::get('publications/{slug}','MasterController@publication');
Route::get('/newsroom', 'MasterController@newsroom');
Route::get('/corporate-responsibility', 'MasterController@corporate');
Route::get('/team', 'MasterController@team');
Route::get('/clients', 'MasterController@clients');
Route::get('/contact', 'MasterController@contactUs');
Route::get('/blog','MasterController@blog');




Route::group([
	'prefix' => 'ar'],function () {
Route::get('/', 'MasterController@index');
Route::get('category/{slug}', 'MasterController@products');
Route::get('product/{slug}', 'MasterController@productDetail');
Route::get('about', 'MasterController@about');
Route::get('brands', 'MasterController@brands');
Route::get('cart', 'MasterController@cart');
Route::get('privacy', 'MasterController@privacy');
Route::get('terms', 'MasterController@terms');
Route::get('contact', 'MasterController@contact');
Route::post('subscribe', 'MasterController@subscribe');
Route::post('contact', 'MasterController@contactMail');
Route::post('career_mail', 'MasterController@careerMail');
Route::post('product/addtocart','MasterController@addToCart');
Route::post('product/updatecart','MasterController@updateCart');
Route::delete('product/removefromcart','MasterController@removeFromCart');
Route::post('product/checkout','MasterController@checkout');
});


Auth::routes();

Route::group([
	'prefix' => 'admin',
	'middleware' => 'auth'], function () {

	Route::get('/', 'DashboardController@index');
	Route::get('dashboard', 'DashboardController@index');
	Route::get('my-account', 'DashboardController@myAccount');
	Route::put('my-account', 'DashboardController@updateAccount');

//Team
	Route::get('team','TeamController@index');
	Route::get('team/add','TeamController@create');
	Route::post('team','TeamController@store');
	Route::get('team/edit/{id}','TeamController@create');
	Route::put('team/update/{id}','TeamController@update');
	Route::delete('team/{id}','TeamController@destroy');
	Route::post('team/sort','TeamController@sort');
	Route::post('team/image','TeamController@saveImage');

	// Route::get('products','ProductController@index');
	// Route::post('products','ProductController@store');
	// Route::get('products/add','ProductController@create');
	// Route::get('products/edit/{id}','ProductController@create');
	// Route::put('products/edit/{id}','ProductController@update');
	// Route::post('products/image','ProductController@saveImage');


	Route::get('news','NewsController@index');
	Route::get('news/add','NewsController@create');
	Route::post('news','NewsController@store');
	Route::get('news/edit/{id}','NewsController@edit');
	Route::delete('news/image','NewsController@deleteImage');
	Route::post('news/image','NewsController@saveImage');
	Route::put('news/{id}','NewsController@update');
	Route::delete('news/{id}','NewsController@destroy');
	

	
	});
