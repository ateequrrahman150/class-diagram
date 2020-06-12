<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
     * Get the all products according to category.
     */
    function products(){
        return $this->hasMany('App\Product');
    }
}
