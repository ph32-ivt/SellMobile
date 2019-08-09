<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{	use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = 
    [
    	'name','email','phone','address','note','status','user_id'
    ];
    const PUBLIC_STATUS = 1;
    const PUBLIC_PRIVATE = 0;

    protected $status2 = [
        1 => [
            'name'=>'Đã Duyệt' 
        ],
        0 => [
            'name'=>'Duyệt'
        ]
    ];

    public function getStatus(){
        return array_get($this->status2,$this->status,'[N\A]');
    }

    public function orderDetails(){
    	return $this->hasMany('App\OrderDetail');
    }
    public function user(){
    	return $this->belongTo('App\User','user_id');
    }
}
