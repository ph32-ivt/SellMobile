<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{	use SoftDeletes;
	protected $table = 'products';
	protected $fillable = 
	[
		'name','pro_slug','description','image','status','pro_hot','category_id'
	];
	const STATUS_PUBLIC = 1;
	const STATUS_PRIVATE = 0;

	const HOT_ON = 1;
	const HOT_OFF = 0;

	protected $status2 = [
		1 =>[
			'name' => 'Hiện',
			'class' => 'btn-danger'
		],
		0 =>[
			'name' => 'Ẩn ',
			'class' => 'btn-outline-danger'	
		]
	];

	protected $hot = [
		1 =>[
			'name' => 'Nổi bật',
			'class' => 'btn-info'
		],
		0 =>[
			'name' => 'Không',
			'class' => 'btn-outline-info'	
		]
	];

	public function getStatuts(){
		return array_get($this->status2,$this->status,'[N\A]');
	}
	public function getHot(){
		return array_get($this->hot,$this->pro_hot,'[N\A]');
	}

	public function category(){
		return $this->belongsTo('App\Category');
	}
	public function productDetail(){
		return $this->hasOne('App\ProductDetail');
	}
	public function comments(){
		return $this->hasMany('App\Comment');
	}
	public function orderDetails(){
		return $this->hasOne('App\OrderDetail');
	}


}
