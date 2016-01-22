<?php

// Route::delete('/');
/*Route::get("/user/delete/{$user->username}",function()
{
	dd("here");	
});*/
Route::delete("/user/delete/{username}",'userController@destroy');
Route::get('/register','userController@create');
Route::post('/register',array('uses'=>'userController@store'));
Route::get('/user/welcome',function(){
	return View::make('/user/welcome');
	});
Route::get('/user/admin','userController@index');
// Route::get('/user/admin/delete?{$username}','userController@destroy');
// Route::delete('/user/delete',function(){
	// return View::make('/user/delete');
// });
Route::resource('session','sessionController');
Route::get('login','sessionController@create');
Route::get('user/logout','sessionController@destroy');
Route::get('/user/admin_sign','sessionController@create');
/*Route::get('/admin',function(){
	return Redirect::to('user/admin');
})->before('auth');*/