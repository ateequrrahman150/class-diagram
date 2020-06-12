<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
    'name', 'email', 'password',
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
     * Get the user malls if he is mall admin.
     */
     public function malls(){
        return $this->hasMany('App\Mall');
    }
    /**
     * Get the user requests.
     */
     public function requests()
    {
        return $this->hasMany('App\Request');
    }
    /**
     * Get the user shop if he is shop admin.
     */
    public function shop()
    {
        return $this->hasOne('App\Shop');
    }
}
