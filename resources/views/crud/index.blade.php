@extends('master')

@section('content')

	
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Jurusan</td>
					<td>Foto</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($students as $student)
					<tr>
						<td></td>
						<td>{{ $student->name }}</td>
						<td>{{ $student->faculty->faculty }}</td>
						@if($student->photo != NULL)
							
							<td><img src="{{ asset('photo/'.$student->photo.'') }}" class="img img-circle" width="50px" height="50px"></td>
						
						@else
						
							<td><h5>Tidak ada foto</h5></td>
						
						@endif
						
						<td><a href="{{ route('update', $student->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;
							<a href="{{ route('delete', $student->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop