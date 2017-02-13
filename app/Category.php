<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function subcategory(){
        return $this->hasMany('App\Subcategory');
    }
    public function property(){
        return $this->hasMany('App\Property');
    }
    public function advert(){
        return $this->hasMany('App\Advert');
    }
}
