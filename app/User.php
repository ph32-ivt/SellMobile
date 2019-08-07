<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{   use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','gender','phone','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const GENDER_FEMALE = 0;
    const GENDER_MALE = 1;

    protected $gender2 = [
        1 =>[
            'name' => 'Nam'
        ],
        0 =>[
            'name' => 'Nữ'
        ]
    ];
   public function getGender(){
        return array_get($this->gender2,$this->gender,'[N\A]');

    }
     public function order(){
        return $this->hasMany('App\Order');
    }

    public function roles(){
        return $this->belongsToMany('App\Role','user_roles');
    }
}
