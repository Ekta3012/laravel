@extends('master')

@section('header')
	<h1>Register Now!</h1>
@stop

@section('content')
	{{ Form::open(['action' => 'userController@store']) }}
		{{ Form::label('username','Username:') }}{{ '<br>' }}
		{{ Form::text('username') }}{{ '<br>' }}
		{{ Form::label('fullname','Full Name') }} {{ '<br>' }}
		{{ Form::text('fullname') }} {{ '<br>' }}
		{{ Form::label('email','Email-id:') }} {{'<br>'}}
		{{ Form::text('email') }} {{'<br>'}}
		{{ Form::label('phone_num','Phone Number:') }} {{'<br>'}}
		{{ '<div>' }}
			{{ Form::text('phone_num') }}  {{'<br>'}}
			{{ Form::label('password','Password:') }}
		{{'</div>'}}
		{{ Form::password('password') }} {{'<br>'}} {{'<br>'}}
		{{ Form::submit('Register') }} 
	{{ Form::close() }}
@stop
