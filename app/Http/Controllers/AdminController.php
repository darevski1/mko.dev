<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Category;
use DB;
class AdminController extends Controller
{
   public function index(){
       return view('pages.admin.main');
   }

   public function getCategory(){

       $category = DB::table('categories')->count();

       return view('pages.admin.main')->with('categories', $category);
   }
}
