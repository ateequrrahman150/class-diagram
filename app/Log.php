<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    /**
     * Get the customer related to log.
     */
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}
