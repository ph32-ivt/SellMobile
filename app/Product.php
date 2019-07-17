<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{	use SoftDeletes;
	protected $table = 'products';
	protected $fillable = 
	[
		'name','pro_slug','description','image','status','pro_hot','category_id','brand_id'
	];
	
	public function category(){
		return $this->belongsTo('App\Category');
	}
	public function brand(){
		return $this->belongsTo('App\Brand');
	}
	public function productDetails(){
		return $this->hasMany('App\ProductDetail');
	}
	public function comments(){
		return $this->hasMany('App\Comment');
	}
	public function orderDetails(){
		return $this->hasMany('App\OrderDetail');
	}
	public function image()
	{
		return $this->hasMany('App\Image');
	}

}
