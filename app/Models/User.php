<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
	protected $fillable = ['name','melicode','gender','age','telephone','address','email','username','password','role','code','group_id'];
	public function time()
	{
		return $this->hasOne('App\Models\Time');
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
	public function comminucations()
	{
		return $this->hasMany('App\Models\Comminucation');
	}
}
