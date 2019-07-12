<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{	use SoftDeletes;
    protected $table = 'brands';
    protected $fillable = 
    [
    	'name','description'
    ];

    public function products(){
    	return $this->hasMany('App\Product');
    }
}
