<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Category;
class AdminController extends Controller
{
   public function index(){
       return view('pages.admin.main');
   }
}
