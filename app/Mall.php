<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{	
	/**
     * Get the the all floors related to mall.
     */
      public function floors()
    {
        return $this->hasMany('App\Floor');
    }

    /**
     *get the mall admin.
     */

      public function user()
    {
        return $this->belongsTo('App\User');
    }
}
