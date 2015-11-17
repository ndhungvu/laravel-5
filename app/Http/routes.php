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

Route::get('/', function () {
    return view('welcome');
});

/*Login - Logout admin*/
Route::group(array('namespace' => 'Admin'), function () {
	Route::get('/admin/login', array('as'=>'admin.login', 'uses'=>'UserController@getLogin'));
	Route::post('/admin/login','UserController@postLogin');
	Route::get('/admin/logout',array('as'=>'admin.logout', 'uses'=>'UserController@getLogout'));
});

/*Admin pages*/
Route::group(array('before' => 'auth'), function() {
	Route::get('/admin',array('as'=>'admin.dashboard', 'uses'=> 'AdminController@index'));

	Route::group(array('namespace' => 'Admin'), function () {
		Route::get('/admin/users',array('as'=>'admin.users','uses'=>'UserController@getIndex'));
	});
});
