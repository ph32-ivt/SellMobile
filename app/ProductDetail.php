<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductDetail extends Model
{	use SoftDeletes;
	protected $table = 'product_details';
	protected $fillable = 
	[
		'cpu','display','pin','sim','memory','camera','option','quantity','price','product_id'
	];
	public function product(){
		return $this->belongsTo('App\Product');
	}
	
}
