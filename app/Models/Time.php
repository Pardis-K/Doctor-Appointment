<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
	protected $fillable = ['starttime','endtime','max_patient','time_id'];
	public function users()
	{
		return $this->belongsToMany('App\Models\User');
	}
	
	public function patients()
	{
		return $this->belongsToMany('App\Models\Patient');
	}
	
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
