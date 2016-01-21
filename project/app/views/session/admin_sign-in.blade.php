@extends('master')

@section('header')
	<h1>Sign-in</h1>
@stop

@section('content')
	{{Form::open(['action'=>'sessionController@create'])}}
		{{Form::label('username','Username:')}}{{'<br>'}}
		{{Form::text('username')}}{{'<br>'}}
		{{Form::label('password','Password:')}}{{'<br>'}}
		{{Form::password('password')}}{{'<br>'}}
		{{Form::submit('Sign-in')}}
	{{Form::close()}}
@stop