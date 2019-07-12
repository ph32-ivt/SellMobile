<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{	use SoftDeletes;
    protected $table = 'images';
    protected $fillable = 
    [
    	'name','path','color_id'
    ];
    public function color(){
    	return $this->belongsTo('App\Color')
    }
}
