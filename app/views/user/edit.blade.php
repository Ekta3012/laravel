@extends('master');

@section('header')
	<h1>Edit Details :</h1>
@stop

@section('content')
	{{Form::open(['method'=>'PATCH','action'=>'userController@update'])}}
		{{ Form::label('username','Username:') }}{{ '<br>' }}
		{{ Form::text('username',$user->username) }}{{ '<br>' }}
		{{ Form::label('fullname','Full Name') }} {{ '<br>' }}
		{{ Form::text('fullname',$user->fullname) }} {{ '<br>' }}
		{{ Form::label('email','Email-id:') }} {{'<br>'}}
		{{ Form::text('email',$user->email) }} {{'<br>'}}
		{{ Form::label('phone_num','Phone Number:') }} {{'<br>'}}
		{{ Form::text('phone_num',$user->phone_num) }}  {{'<br>'}}
		{{ Form::label('password','Password:') }}
		{{ Form::password('password') }} {{'<br>'}} {{'<br>'}}
		{{ Form::submit('Update') }} 
	{{Form::close()}}
@stop