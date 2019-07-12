<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorProductDetail extends Model
{	use SoftDeletes;
    protected $table = 'color_product_details';
    protected $fillable = 
    [
    	'product_id','color_id'
    ];
}
