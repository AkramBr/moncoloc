<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@profile');


Route::get('/publish', 'OfferController@AddOffer');
Route::post('/publish', 'OfferController@AddOffer');

Route::get('/',function (){
    if (request()->has('type')){
        $offers = App\Offer::where('type', request('type'))->paginate(5)->appends('type', request('type'));

    } else
    {
        $offers = App\Offer::paginate(5);
    }
    return view('/offers')->with('offers',$offers);
});

Route::get('/offers', 'OfferController@viewoffers');
Route::post('/offers', 'OfferController@viewoffers');

Route::get('/offerdetails/{id}', 'OfferController@viewDetails');
Route::post('/offerdetails/{id}', 'OfferController@viewDetails');


Route::post('/profile', 'UserController@update_avatar');
Route::get('/home', 'HomeController@index');
