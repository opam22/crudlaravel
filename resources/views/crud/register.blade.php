@extends('master')

@section('content')

	<h1>Register</h1>

	{!! Form::open(['route' => 'post.register']) !!}

	<div class="form-group"> 
		{!! Form::label('name', 'Name :') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group"> 
		{!! Form::label('email', 'Email :') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group"> 
		{!! Form::label('password', 'Password :') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>

	<div class="form-group"> 
		{!! Form::label('password_confirmation', 'Re-Password :') !!}
		{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
	</div>

	<!-- name faculties_id sudah hukum alam mengikuti accessor yang ada di model Student, supaya menampilkan select yang selected -->
	
	<div class="form-group"> 
		{!! Form::submit('Register', ['class' => 'btn btn-primary form-control']) !!}
	</div>


	{!! Form::close() !!}

@stop