<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{	use SoftDeletes;
    protected $table = 'roles';
    protected $fillable = 
    [
    	'name'
    ];

     public function users(){
        return $this->belongsToMany('App\User','user_roles');
    }
     public function Permissions(){
        return $this->belongsToMany('App\Permission','role_permissions');
    }
}
