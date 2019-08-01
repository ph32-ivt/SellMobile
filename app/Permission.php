<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Permission extends Model
{	use SoftDeletes;
    protected $table = 'permissions';
    protected $fillable = 
    [
    	'name','display_name'
    ];
    public function roles(){
    	return $this->belongsToMany('App\Role','role_permissions');
    }
}
