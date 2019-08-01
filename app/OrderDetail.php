<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OrderDetail extends Model
{	use SoftDeletes;
	protected $table = 'order_details';
	protected $fillable = 
	[
		'quantity','price','order_id','product_id'
	];
	public function product(){
		return $this->hasMany('App\Product');
	}

	public function order(){
		return $this->belongsTo('App\Order');
	}
}
