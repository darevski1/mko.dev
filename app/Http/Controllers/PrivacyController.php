<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Privacy;
class PrivacyController extends Controller
{
    public function getPrivacy()
    {
        $privacy = Privacy::all();
        return view('pages.about.privacy')->withprivacy($privacy);
    }

    public function showPrivacy()
    {
        $privacy = Privacy::all();
        return view('pages.admin.privacy.index')->withPrivacy($privacy);
    }
    public function update(Request $request, $id)
    {
        //Validate data
        $this->validate($request, array(
            'title' => 'required',
            'description' => 'required'
        ));
        $privacy = Privacy::find($id);
        $privacy->title = $request->input('title');
        $privacy->description = $request->input('description');
        $privacy->save();

        Session::flash('success', 'The blog post was successfully save!');
        return redirect('terms/create')->with('privacy', $privacy);
    }

}
