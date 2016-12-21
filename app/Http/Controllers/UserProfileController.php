<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserProfileController extends Controller
{
    public function index(){
        return view('pages.profile.index');
    }
}
