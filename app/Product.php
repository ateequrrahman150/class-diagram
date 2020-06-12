<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	/**
     * Get the product category.
     */
    function category(){
        return $this->belongsTo('App\Category');
    }
    /**
     * Get the shop which contain product.
     */
    function shop(){
        return $this->belongsTo('App\Shop');
    }

}
