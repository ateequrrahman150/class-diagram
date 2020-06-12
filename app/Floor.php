<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
	/**
     * Get the mall detail of specefic floor.
     */
      public function mall()
    {
        return $this->belongsTo('App\Mall');
    }
    /**
     * Get All shopes related to floor.
     */
     public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
