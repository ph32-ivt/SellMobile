<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{	use SoftDeletes;
    protected $table = 'colors';
    protected $fillable = 
    [
    	'name'
    ];
    public function productDetails(){
    	return $this->belongsToMany('App\ProductDetail','color_product_details');
    }
    public function images(){
    	return $this->hasMany('App\Image');
    }
    
}
