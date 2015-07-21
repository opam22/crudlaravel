@extends('master')

@section('content')
	
	<h1>Create</h1>

	{!! Form::model($student, ['files' => true, 'method' => 'PATCH', 'url' => 'update/' . $student->id]) !!}

		@include('crud/_form', ['submitButtonText' => 'Update Student'])

	{!! Form::close() !!}

	@include('crud/_errors')

@stop