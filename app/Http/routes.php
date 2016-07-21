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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/tools', 'ToolsController@index')->name('tools');
Route::get('/work', 'WorkController@index')->name('work');

Route::group(['prefix' => 'services'], function() {
	Route::get('/', 'ServicesController@index')->name('services');
	Route::get('/development', 'ServicesController@development')->name('services.dev');
	Route::get('/consulting', 'ServicesController@consulting')->name('services.consulting');
	Route::get('/design', 'ServicesController@design')->name('services.design');
});