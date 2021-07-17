<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comminucation extends Model
{
    use HasFactory;
	protected $fillable = ['user_id','subject','text'];
	
	public function user ()
	{
		return $this->belongsTo('App\Models\User');
	}
	
}
