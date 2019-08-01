<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
   	protected $table = 'slides';
	protected $fillable = 
	[
		'image','status'
	];
	const PUBLIC_STATUS = 1;
	const PRIVATE_STATUS = 0;

	protected $status2 = [
			1 => [
			'name'=> 'Hiện',
			'class' => 'btn btn-danger'
			],
			0 => [
			'name'=> 'Ẩn',
			'class' => 'btn btn-outline-danger'
			]
	];

	public function getStatus(){
		return array_get($this->status2,$this->status,'[N\A]');
	}
}
