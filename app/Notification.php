<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	/**
     * Get the shop detail for specefic notification.
     */
    function shop(){
        return $this->belongsTo('App\Shop');
    }
}
