<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{	use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = 
    [
    	'name','phone','address','user_id'
    ];
    public function orderDetails(){
    	return $this->hasMany('App\OrderDetail');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
