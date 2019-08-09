<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{	use SoftDeletes;
    protected $table = 'comments';
    protected $fillable = 
    [
    	'name','email','title','content','rate','status','product_id','parent_id'
    ];
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
