<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{	
	use SoftDeletes;
	protected $table = 'categories';
	protected $fillable = 
	[
		'name','parent_id','cate_slug'
	];
	
	public function products(){
		return $this->hasMany('App\Product');
	}
	public function children()
	{
		return $this->hasMany('App\Category', 'parent_id');
	}
}
