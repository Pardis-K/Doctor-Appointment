<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	use HasFactory;
	
	public function group ()
	{
		return $this->belongsTo('App\Models\Group');
	}
	
	public function users()
	{
		return $this->belongsToMany('App\Models\User');
	}
	
	public function times()
	{
		return $this->belongsToMany('App\Models\Time');
	}
	
}
