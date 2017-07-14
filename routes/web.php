<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::post('contact', 'PagesController@postContact');

Route::group(['prefix' => 'user'], function ()
{
	Route::get('/dashboard', [
	'as'=>'user.dashboard',
	'uses' => 'UserProfileController@getDashboard',
	]);

	Route::get('/profile', [
	'as'=>'user.profile',
	'uses' => 'UserProfileController@getProfile',
	]);

	Route::post('/profile', [
	'as'=>'user.profile',
	'uses' => 'UserProfileController@postProfile',
	]);

});


Route::resource('gamers', 'GamersController');


Route::resource('articles', 'ArticlesController');

Route::resource('categories', 'CategoriesController',['except' => ['create']]);


Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
		Route::get('/dashboard', 'HomeController@index');

});


