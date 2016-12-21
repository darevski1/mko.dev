<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Help;
use Illuminate\Support\Facades\Validator;
use Session;
class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helper = Help::all();
        return view('pages.admin.help.index')->withHelper($helper);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'answer' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('help/create')
                ->withErrors($validator)
                ->withInput();
        }

        $helper = new Help();
        $helper -> title = $request -> title;
        $helper -> answer = $request ->answer;
        $helper -> save();


        Session::flash('success', 'Успешно додадено ново прашање!!!!');
        return redirect('help/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $helper = Help::find($id);
        return view('pages.admin.help.index')->with($helper);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required',
            'answer' => 'required'
        ));
        $helper = Help::find($id);
        $helper -> title = $request->input('title');
        $helper -> answer = $request->input('answer');
        $helper->save();

        Session::flash('success', 'Успешно променто прашање!!!!');
        return redirect('help/create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $helper = Help::find($id);
        $helper->delete();

        Session::flash('succes', 'Успешно избришано прашање');
        return redirect('help/create');
    }
    public function getData ()
    {
        $help = Help::all();
        return view('pages.about.help')->withHelp($help);
    }
}
