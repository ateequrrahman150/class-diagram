<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Get the shop related to customer.
     */
	public function shops()
	{
		return $this->belongsToMany('App\Shop');
	}

	/**
     * Get the customer activity logs.
     */
    public function logs()
    {
    	return $this->hasMany('App\Log');
    }
}
