<?php

namespace App\Http\Controllers;

use App\Terms;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
class TermsController extends Controller
{
   public function getTerms()
   {
       $terms = Terms::all();
       return view('pages.about.terms')->withTerms($terms);
   }
    public function showTerms(){
        $terms = Terms::all();
        return view('pages.admin.terms.index')->withTerms($terms);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
           'title' => 'required',
            'description' => 'required'
        ));
        $terms = Terms::find($id);
        $terms->title = $request->input('title');
        $terms->description = $request->input('description');
        $terms->save();

        Session::flash('success', 'The blog post was successfully save!');
        return redirect('terms/create')->with('terms', $terms);
    }
}
