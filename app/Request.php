<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

     /**
    *
    *Relatoinship
    *
    * make relation between request and mall_admin
    **/
        public function user(){
    	    return $this->belongsTo('App\User');
        }


    /**
     * Get the user activity logs.
     */
     public function mall_admin(){
    	return $this->belongsTo('App\User');
    }

}
