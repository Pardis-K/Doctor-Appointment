<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_Time_User extends Model
{
    use HasFactory;
	
	protected $fillable = ['time_id','user_id','patient_id','reserve_date','visit_date','doctor_comment','drugs'];

	public function times()
	{
		return $this->belongsToMany('App\Models\Time');
	}
	
	public function patients()
	{
		return $this->belongsToMany('App\Models\Patient');
	}
	
	public function user()
	{
		return $this->belongsToMany('App\Models\User');
	}
}
