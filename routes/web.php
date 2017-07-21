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
Route::get('clear',function(){

	Artisan::call('config:clear');
	Artisan::call('view:clear');
	Artisan::call('cache:clear');
	Artisan::call('route:clear');
	dd('cleared cache files');
});


Route::get('/','MasterController@index');
Route::get('/about', 'MasterController@aboutUs');
Route::get('/training', 'MasterController@training');
Route::post('/training', 'MasterController@trainingMail');
Route::get('/service', 'MasterController@service');
Route::get('/events', 'MasterController@events');
Route::get('/publications', 'MasterController@publications');
Route::get('/newsrooms', 'MasterController@newsrooms');
Route::get('/corporate-responsibility', 'MasterController@corporate');
Route::get('/team', 'MasterController@team');
Route::get('/team/{slug}', 'MasterController@teamDetails');
Route::get('/team/{slug}/vcard', 'MasterController@teamVcard');
Route::get('/clients', 'MasterController@clients');
Route::get('/contact', 'MasterController@contact');
Route::post('/contact', 'MasterController@contactMail');
Route::get('/insights','MasterController@insights');
Route::get('/insights/{slug}','MasterController@insightDetails');
Route::get('/book/{slug}','MasterController@book');




Route::group([
	'prefix' => 'ar'],function () {

		Route::get('/','MasterController@index');
		Route::get('/about', 'MasterController@aboutUs');
		Route::get('/training', 'MasterController@training');
		Route::post('/training', 'MasterController@trainingMail');
		Route::get('/service', 'MasterController@service');
		Route::get('/events', 'MasterController@events');
		Route::get('/publications', 'MasterController@publications');
		Route::get('/newsrooms', 'MasterController@newsrooms');
		Route::get('/corporate-responsibility', 'MasterController@corporate');
		Route::get('/team', 'MasterController@team');
		Route::get('/team/{slug}', 'MasterController@teamDetails');
		Route::get('/team/{slug}/vcard', 'MasterController@teamVcard');
		Route::get('/clients', 'MasterController@clients');
		Route::get('/contact', 'MasterController@contact');
		Route::post('/contact', 'MasterController@contactMail');
		Route::get('/insights','MasterController@insights');
		Route::get('/insights/{slug}','MasterController@insightDetails');
		Route::get('/book/{slug}','MasterController@book');

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
	Route::get('team/sort','TeamController@showSort');
	Route::post('team/sort','TeamController@sort');
	Route::post('team/image','TeamController@saveImage');
	Route::delete('team/image','TeamController@deleteImage');

//Client
	Route::get('client','ClientController@index');
	Route::get('client/add','ClientController@create');
	Route::post('client','ClientController@store');
	Route::get('client/edit/{id}','ClientController@create');
	Route::put('client/update/{id}','ClientController@update');
	Route::delete('client/{id}','ClientController@destroy');
	Route::post('client/image','ClientController@saveImage');
	Route::get('client/sort','ClientController@showSort');
	Route::post('client/sort','ClientController@sort');
	// Route::delete('client/image','ClientController@deleteImage');

//Service
	Route::get('service','ServiceController@index');
	Route::get('service/add','ServiceController@create');
	Route::post('service','ServiceController@store');
	Route::get('service/edit/{id}','ServiceController@create');
	Route::put('service/update/{id}','ServiceController@update');
	Route::delete('service/{id}','ServiceController@destroy');
	Route::post('service/image','ServiceController@saveImage');
	Route::get('service/sort','ServiceController@showSort');
	Route::post('service/sort','ServiceController@sort');
	// Route::delete('service/image','ServiceController@deleteImage');


//Insight
	Route::get('insight','InsightController@index');
	Route::get('insight/add','InsightController@create');
	Route::post('insight','InsightController@store');
	Route::get('insight/edit/{id}','InsightController@create');
	Route::put('insight/update/{id}','InsightController@update');
	Route::post('insight/image','InsightController@saveImage');
	Route::delete('insight/{id}','InsightController@destroy');
	Route::get('insight/sort','InsightController@showSort');
	Route::post('insight/sort','InsightController@sort');
	// Route::delete('insight/image','InsightController@deleteImage');


	Route::get('event','EventController@index');
	Route::get('event/add','EventController@create');
	Route::post('event','EventController@store');
	Route::get('event/edit/{id}','EventController@create');
	Route::put('event/update/{id}','EventController@update');
	Route::delete('event/{id}','EventController@destroy');
	Route::post('event/image','EventController@saveImage');
	Route::get('event/sort','EventController@showSort');
	Route::post('event/sort','EventController@sort');
	// Route::delete('event/image','EventController@deleteImage');

	
	Route::get('publication','PublicationController@index');
	Route::get('publication/add','PublicationController@create');
	Route::post('publication','PublicationController@store');
	Route::get('publication/edit/{id}','PublicationController@create');
	Route::put('publication/update/{id}','PublicationController@update');
	Route::delete('publication/{id}','PublicationController@destroy');
	Route::post('publication/image','PublicationController@saveImage');
	Route::get('publication/sort','PublicationController@showSort');
	Route::post('publication/sort','PublicationController@sort');
	// Route::delete('publication/image','PublicationController@deleteImage');

	Route::get('video','VideoController@index');
	Route::get('video/add','VideoController@create');
	Route::post('video','VideoController@store');
	Route::get('video/edit/{id}','VideoController@create');
	Route::put('video/update/{id}','VideoController@update');
	Route::get('video/sort','VideoController@showSort');
	Route::post('video/sort','VideoController@sort');
	Route::delete('video/{id}','VideoController@destroy');


	//Service
		Route::get('testimonial','TestimonialController@index');
		Route::get('testimonial/add','TestimonialController@create');
		Route::post('testimonial','TestimonialController@store');
		Route::get('testimonial/edit/{id}','TestimonialController@create');
		Route::put('testimonial/update/{id}','TestimonialController@update');
		Route::delete('testimonial/{id}','TestimonialController@destroy');
		Route::post('testimonial/image','TestimonialController@saveImage');
		Route::get('testimonial/sort','TestimonialController@showSort');
		Route::post('testimonial/sort','TestimonialController@sort');
		// Route::delete('testimonial/image','ServiceController@deleteImage');

	
	});
