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



#Static Pages
Route::get('terms', 'AboutController@getTerms');
Route::get('privacy', 'PrivacyController@getPrivacy');
Route::get('help','HelpController@index');
Route::get('about', 'AboutController@getAbout');


# Admin panel pages


Route::get('adminds', 'AdminController@index');

#CityController
Route::resource('city', 'CityController');

Route::resource('category', 'CategoryController');
#Advert

#Model Controller

Route::resource('subcategory', 'SubcategoryController');



Route::auth();

Route::get('/home', 'HomeController@index');
