
<?php

class userController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user= User::all();
		return View::make('user/admin',['user'=>$user]);
		return $user;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user= new User;
		$user->username = Input::get('username');
		$user->fullname = Input::get('fullname');
		$user->email = Input::get('email');
		$user->phone_num = Input::get('phone_num');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		return Redirect::to('user/welcome');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($userid)
	{
		$user=DB::table('users')->where('id',$userid)->first();
		return View::make('user.edit')->withUser($user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$user=User::find($id);
		//dd($user);
		$user->username = Input::get('username');
		$user->fullname = Input::get('fullname');
		$user->email = Input::get('email');
		$user->phone_num = Input::get('phone_num');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		return 'Details Updated Sucessfully';

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($username)
	{
		//dd($username);
		DB::table('users')->where('username','=', $username)->delete();
		return Redirect::to('user/admin');
	}


}
