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
}
