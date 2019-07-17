<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserRole extends Model
{   use SoftDeletes;
	protected $table = 'user_roles';
	protected $fillable = 
	[
		'user_id','role_id'
	];
	public function user()
	{
		return $this->hasMany('App\User');
	}
}
