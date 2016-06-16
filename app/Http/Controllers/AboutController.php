<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Terms;
class AboutController extends Controller
{
    // Terms Pages Select all terms from db - table
    public function getTerms(){
        $terms = Terms::all();
        return view('pages.about.terms')->withTerms($terms);
    }
    // Privacy Policy
    public function getPrivacy(){
        return view('pages.about.privacy');
    }
    // About
    public function getAbout(){
        return view('pages.about.about');
    }
}
