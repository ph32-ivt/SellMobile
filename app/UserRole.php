<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{   use SoftDeletes;
	protected $table = 'user_roles';
	protected $fillable = 
	[
		'user_id','role_id'
	];
}
