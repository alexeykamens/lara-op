<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database;


class Product_category extends Model
{
    public function product(){
    	// return $this->belongsTo('App\Product', 'category_id'); //односторонняя связь
    	return $this->hasMany('App\Product', 'category_id', 'id');
    }


}
