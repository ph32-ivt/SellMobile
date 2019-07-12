<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{	use SoftDeletes;
	protected $table = 'product_details';
	protected $fillable = 
	[
		'cpu','display','pin','image','sim','memory','camera','price','quantity','product_id'
	];
	public function product(){
		return $this->belongsTo('App\Product');
	}
	public function colors(){
		return $this->belongsToMany('App\Color','color_product_details');
	}
}
