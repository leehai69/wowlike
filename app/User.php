<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $collection = 'user';
    protected $fillable = [
        'fbid', 'access_token','name','gender','locale','updated_at','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     public $timestamps = true;
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
}
