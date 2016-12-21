<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function subcategory(){
        return $this->hasMany('App\Subcategory');
    }
}
