<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Image extends Model
{	use SoftDeletes;
    protected $table = 'images';
    protected $fillable = 
    [
    	'name','path','color_id','product_id'
    ];
    public function product(){
    	return $this->belongsTo('App\Product')
    }
}