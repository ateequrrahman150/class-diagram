<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * Get the all customer related to shop.
     */
    public function customer()
    {
    	return $this->belongsToMany('App\Customer');
    }
    /**
     * Get the shop admin record.
     */
    function user(){
        return $this->belongsTo('App\User');
    }
    /**
     * Get the the all product related to shop.
     */
    function products(){
        return $this->hasMany('App\Product');
    }
    /**
     * Get the all notification related to shop.
     */
    function notifications(){
        return $this->hasMany('App\Notification');
    }
    /**
     * Get the Shop floor detail.
     */
    function floor(){
        return $this->belongsTo('App\Floor');
    }
}
