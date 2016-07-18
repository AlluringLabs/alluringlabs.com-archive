<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/tools', 'ToolsController@index');

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', 'BlogController@index');
    Route::get('/{slug}', 'BlogController@show');
});

Route::group(['prefix' => 'services'], function() {
	Route::get('/', 'ServicesController@index');
	Route::get('/development', 'ServicesController@development');
	Route::get('/consulting', 'ServicesController@consulting');
	Route::get('/design', 'ServicesController@design');
});