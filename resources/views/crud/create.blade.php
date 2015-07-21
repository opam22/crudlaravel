@extends('master')

@section('content')
	
	<h1>Create</h1>

	{!! Form::open(['url' => 'create', 'files' => true]) !!}

		@include('crud/_form', ['submitButtonText' => 'Add Student'])

	{!! Form::close() !!}


	@include('crud/_errors')

@stop