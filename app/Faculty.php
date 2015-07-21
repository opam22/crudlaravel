<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model {

	protected $fillable = ['faculty'];

	public function students()
	{
		return $this->hasMany('App\Student');
	}

}
