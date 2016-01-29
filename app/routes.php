<?php
Route::delete("/user/delete/{username}",'userController@destroy');
Route::get('/register','userController@create');
Route::post('/register',array('uses'=>'userController@store'));
Route::get('/user/welcome',function(){
	return View::make('/user/welcome');
	});
Route::resource('session','sessionController');
Route::get('login','sessionController@create');
Route::get('user/logout','sessionController@destroy');
Route::get('/user/admin_sign','sessionController@create');
Route::group(array('before'=>'auth'),function(){
	Route::get('/admin',function(){
	return Redirect::to('user/admin');
	});
	Route::get('/user/admin','userController@index');
});
Route::post("/user/edit/{userid}",'userController@edit');
Route::patch("/user/edit/{userid}",'userController@update');
