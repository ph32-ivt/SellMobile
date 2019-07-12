<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{	use SoftDeletes;
	protected $table = 'product_details';
	protected $fillable = 
	[
		'cpu','display','pin','sim','memory','camera','price','option','quantity','product_id'
	];
	public function product(){
		return $this->belongsTo('App\Product');
	}
	
}
