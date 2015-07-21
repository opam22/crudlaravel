<div class="form-group"> 
	{!! Form::label('name', 'Nama :') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- name faculties_id sudah hukum alam mengikuti accessor yang ada di model Student, supaya menampilkan select yang selected -->
<div class="form-group"> 
	{!! Form::label('faculty_id', 'Fakultas :') !!}
	{!! Form::select('faculty_id', $faculties, null, ['id' => 'faculty_id', 'class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::label('photo', 'Foto :') !!}
	{!! Form::file('photo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
