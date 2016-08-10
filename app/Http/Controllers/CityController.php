<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use Illuminate\Support\Facades\Validator;
use Session;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::All();
        return view('pages.admin.city')->withcity($city);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.city');
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
            'cityname' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('city')
                ->withErrors($validator)
                ->withInput();
        }
        else{
            $city = new City;
            $city->cityname = $request->cityname;
            $city->save();
            Session::flash('success', 'Успешно додаден нов Град!!!!');
            return redirect('city');
        }

        // Store the blog post...
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::find($id);
        return view('pages.admin.editcity')->withCity($city);
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
            'cityname'=>'required'
        ));
        $city = City::find($id);
        $city->cityname = $request->input('cityname');
        $city->save();

        Session::flash('success', 'Успешно Променет Град!!!!');

        return redirect('city');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
