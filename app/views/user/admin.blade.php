@extends('master')

@section('header')
	<h1>Admin Page</h1>
@stop

@section('content')
	@foreach($user as $user)
		<li>{{ $user->username .'&nbsp'}} 
			{{ Form::open()}}
			{{Form::submit('Edit')}}
			{{Form::close()}}
			
			{{ Form::open(['url' => "user/delete/{$user->username}",'method'=>'DELETE'])}} 
			{{Form::submit('Delete')}}
			{{ Form::close()}}
		</li>
	@endforeach
@stop
