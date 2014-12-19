<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Standard route for guests 
|--------------------------------------------------------------------------
| /
| login
| logout
| 
*/

Route::get ('/', 		array('as' => 'base', 	'uses' => 'HomeController@index'));
Route::post('login', 	array('as' => 'login', 	'uses' => 'HomeController@login'))->before ('not_authd')->before ('csrf');
Route::get ('logout', 	array('as' => 'logout', 'uses' => 'HomeController@logout'));	

/*
|--------------------------------------------------------------------------
| Batch Form Group
| This is weird becuase we will have multiple edit and update pages based
| on the stage that the batch is currently in.
|--------------------------------------------------------------------------
| user/profile
| user/edit_profile
| 
*/

//BatchForm Group
Route::group (array('before' => 'auth', 'prefix' => 'forms'), function() {	
	// users group
	Route::group (array('prefix' => 'batch-history'), function() {

		Route::get ('/', 					array( 'as' => 'batch_histories', 			'uses' => 'BatchFormController@index'));
		Route::get ('/create', 				array( 'as' => 'create_batch_history', 		'uses' => 'BatchFormController@create'));
		Route::get ('/start', 				array( 'as' => 'start_batch_history', 		'uses' => 'BatchFormController@start'));
		Route::post('/store',				array( 'as' => 'store_batch_history', 		'uses' => 'BatchFormController@store'));
		Route::get ('/{id}', 				array( 'as' => 'show_batch_history', 		'uses' => 'BatchFormController@show'));
		Route::get ('/{id}/edit/{stage}', 	array( 'as' => 'edit_batch_history', 		'uses' => 'BatchFormController@edit'));
		Route::post ('/{id}/update/{stage}', array( 'as' => 'update_batch_history', 		'uses' => 'BatchFormController@update'));		
		//Route::delete('/delete', 			array( 'as' => 'delete_batch_history', 		'uses' => 'BatchFormController@destroy'));
	});	
});

//User Group
Route::group (array('before' => 'auth', 'prefix' => 'users'), function() {	
	
	Route::get ('/', 			array( 'as' => 'users', 		'uses' => 'UserController@index'));
	Route::get ('/create', 		array( 'as' => 'create_user', 	'uses' => 'UserController@create'));
	Route::post('/store', 		array( 'as' => 'store_user', 	'uses' => 'UserController@store'));
	Route::get ('/{id}', 		array( 'as' => 'show_user', 	'uses' => 'UserController@show'));
	//Route::get ('/{id}/edit', 	array( 'as' => 'edit_user', 	'uses' => 'UserController@edit'));
	//Route::put ('/{id}/update', array( 'as' => 'update_user', 	'uses' => 'UserController@update'));
	//Route::delete('/delete', 	array( 'as' => 'delete_user', 	'uses' => 'UserController@destroy'));
});


/*
|--------------------------------------------------------------------------
| User Route group -- this is for users (users encompasses everyone with a login)
|--------------------------------------------------------------------------
| user/profile
| user/edit_profile
| 
*/

// profile group

Route::group (array ('before' => 'auth', 'prefix' => 'profile'), function () {
	Route::get ('/', 		array('as' => 'profile', 		'uses' => 'ProfileController@index'));
	Route::get ('/edit', 	array('as' => 'edit_profile', 	'uses' => 'ProfileController@edit'));
	Route::post('/update', 	array('as' => 'update_password','uses' => 'ProfileController@update'));	
	
});

/*
|---------------------------------------------------
| Show Group -- This is for display information only
|---------------------------------------------------
|
*/
Route::group(array('before' => 'auth', 'prefix' => 'billOfMaterials'), function () {
	Route::get('/', array('as' => 'bill_of_materials', 'uses' => 'BillofMaterialsController@index'));
	Route::get('/{alphanumeric}', array('as' => 'show_bill_of_materials', 'uses' => 'BillofMaterialsController@show'));
});

/*
|--------------
| Test Routes
|--------------
| /test
|
*/

Route::get('/test/{alphanumeric}', array('as' => 'test', 'uses' => 'TestController@test'));


//Route::group (array ('before' => 'auth', 'prefix' => 'forms'), function () {

//Route::group (array (/*'before' => 'auth',*/ 'prefix' => 'forms'), function () {
	
//});

//moderator group
/*
Route::group (array('before' => 'moderator', 'prefix' => 'moderator'), function() {	
	// users group
	Route::group (array('prefix' => 'users'), function() {
		Route::get ('/', 			array( 'as' => 'users', 		'uses' => 'UserController@index'));
		Route::get ('/create', 		array( 'as' => 'create_user', 	'uses' => 'UserController@create'));
		Route::post('/store', 		array( 'as' => 'store_user', 	'uses' => 'UserController@store'));
		Route::get ('/{id}', 		array( 'as' => 'show_user', 	'uses' => 'UserController@show'));
		Route::get ('/{id}/edit', 	array( 'as' => 'edit_user', 	'uses' => 'UserController@edit'));
		Route::put ('/{id}/update', array( 'as' => 'update_user', 	'uses' => 'UserController@update'));
		Route::delete('/delete', 	array( 'as' => 'delete_user', 	'uses' => 'UserController@destroy'));
	});	
});
*/