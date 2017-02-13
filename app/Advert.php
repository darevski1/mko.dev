<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Advert extends Model
{
    public function getCategory(){
        return $this->belongsTo('App\Category');
    }
}
