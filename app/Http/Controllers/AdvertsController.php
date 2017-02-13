<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Advert;
use App\Subcategory;
use Input;
use DB;
class AdvertsController extends Controller
{
    public function getCat(){

        $getcategory = DB::table("categories")->lists("title","id");
        return view('pages.advert.index',compact('getcategory'));

    }

    public function getSubcategory($id){

        $subcategoies = DB::table('subcategories')->where('cat_id', $id)->lists('name','id');
        return json_encode($subcategoies);
    }

}
