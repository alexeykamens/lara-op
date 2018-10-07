<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

use Illuminate\Support\Facades\Storage;


class Product extends Model
{
    protected $rules = [
        'name' => ['required'],
        'category_id' => ['required'],
        'description' => ['required'],
        'price' => ['required', 'numeric', 'between:0.00,9999.99'],
    ];
    protected $fillable = array('name', 'category_id', 'description', 'price', 'url');// обязательно при привязке к модели при формировании формы
    public function category(){
    	// return $this->hasOne('App\Product_category', 'id', 'category_id');//односторонняя связь
    	return $this->belongsTo('App\Product_category');
    }
    public function imgExist($path, $n) {
        $fullpath=($path.$n.'.JPG');
        return Storage::disk('public')->exists($fullpath);
    }
    public function imgExistReturn($path, $n) {
        $fullpath=($path.$n.'.JPG');
        return (Storage::disk('public')->exists($fullpath))?asset('storage/'.$fullpath):asset('storage/images/noimage.JPG');
        // return $fullpath;
    }
}
