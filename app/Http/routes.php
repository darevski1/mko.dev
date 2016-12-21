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
Route::get('terms', 'TermsController@getTerms');
Route::get('terms/create', 'TermsController@showTerms');
Route::post('terms/create/{id}',
    [
        'as' => 'terms/create/{id}', 'uses' => 'TermsController@update'
    ]);
Route::get('privacy', 'PrivacyController@getPrivacy');
Route::get('privacy/create',
    [
        'as' => '', 'uses' => 'PrivacyController@showPrivacy'
]);

Route::resource('help/create','HelpController');



Route::get('about', 'AboutController@index');
Route::get('about/create',
    [
        'as' => 'about/create', 'uses' => 'AboutController@show'
    ]);
Route::post('about/create/{id}',
    [
    'as' => 'about/create/{id}', 'uses' => 'AboutController@update'
    ]);

# Admin panel pages


Route::get('adminds', 'AdminController@index');
Route::get('adminds', 'AdminController@getCategory');

#CityController
Route::resource('city', 'CityController');
#Category
Route::resource('category', 'CategoryController');
#Model Controller
Route::resource('subcategory', 'SubcategoryController');
Route::auth();
Route::get('/home', 'HomeController@index');
#User Profile
Route::get('myprofile', 'UserProfileController@index');

//Car Brands
Route::resource('carmodels', 'CarmodelsController');






