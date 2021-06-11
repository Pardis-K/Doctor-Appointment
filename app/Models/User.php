<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
	
	public function time()
	{
		return $this->hasOne('App\Models\Time','doctor_id','id');
	}
	public function group ()
	{
		return $this->belongsTo('App\Models\Group');
	}
	
	public function times()
	{
		return $this->belongsToMany('App\Models\Time');
	}
	
	public function patients()
	{
		return $this->belongsToMany('App\Models\Patient');
	}
}
