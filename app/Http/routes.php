<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});



#Static Pgaes
Route::get('terms', 'AboutController@getTerms');

Route::get('privacy', 'AboutController@getPrivacy');

Route::get('help','HelpController@index');

Route::get('about', 'AboutController@getAbout');


# Admin panel pages


Route::get('adminds', 'AdminController@index');