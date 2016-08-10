<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::All();
        return view('pages.admin.category')->withcategory($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'title' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect('category')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $category = new Category;
            $category->title = $request->title;
            $category->save();
            Session::flash('success', 'Успешно додаден нова Категорија!!!!');
            return redirect('category');
        }
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
        $category = Category::find($id);
        return view ('pages.admin.edit')->withCategory($category);
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
       //Validate data

        $this->validate($request, array(
            'title'=> 'required'
        ));
        //Save Data
        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->save();

        //Session message
        Session::flash('success', 'Успешно променета категорија');
        //Rediredt
        return redirect('category')->withCategory($category);
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
