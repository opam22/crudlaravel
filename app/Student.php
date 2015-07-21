<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $fillable = [
		'name',
		'faculty_id',
		'photo'
	];

	public function faculty()
	{
		return $this->belongsTo('App\Faculty');
	}

	//untuk select yang selected di form
	public function getFacultyIdListAttribute()
	{
		return $this->faculty->lists('id');
	}


}
