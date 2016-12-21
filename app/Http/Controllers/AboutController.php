<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\About;
use Session;
class AboutController extends Controller
{
    public function index(){
        $aboutus = About::all();
        return view('pages.about.index')->withAboutus($aboutus);
    }
    public function show(){
        $about = About::all();
        return view('pages.admin.about.index')->withAboutus($about);
    }
    public function update(Request $request, $id)
    {
        //Validate data
        $this->validate($request, array(
        'title' => 'required',
        'description' => 'required'
    ));
        $aboutus = About::find($id);
        $aboutus->title = $request->input('title');
        $aboutus->description = $request->input('description');
        $aboutus->save();

        Session::flash('success', 'The blog post was successfully save!');
        return redirect('about/create')->with('aboutus', $aboutus);
    }

}
