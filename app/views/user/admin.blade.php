@extends('master')

@section('header')
	<h1>Admin Page</h1>
	<!--<div>{{link_to('user/logout','Log Out')}}</div>-->
@stop

@section('content')
	@foreach($user as $user)
		<li>{{'<br>'}}{{ $user->username .'&nbsp'}} 
			{{ Form::open(['url'=>"user/edit/{$user->id}"])}}
			{{Form::submit('Edit')}}
			{{Form::close()}}{{'<br>'}}
			
			{{ Form::open(['url' => "user/delete/{$user->username}",'method'=>'DELETE'])}} 
			{{Form::submit('Delete')}}
			{{ Form::close()}}{{'<br>'}}
		</li>
	@endforeach
@stop

