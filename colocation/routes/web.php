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
use App\Offer;
use App\User;

Route::get('/', function () {
    return view('home');
});

Auth::routes();




Route::get('/admin', function () {
    return view('/admin');
})-> middleware('admin');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@profile');

Route::get('/manage-users', function () {
    return view('manage-users');
});

Route::get('/manage-offers', 'AdminController@viewoffers');
Route::get('/manage-users', 'AdminController@viewusers');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/publish', 'OfferController@AddOffer');
Route::post('/publish', 'OfferController@AddOffer');

Route::get('/offers',function (){
    if (request()->has('type')){
        $offers = App\Offer::where('type', request('type'))->paginate(5)->appends('type', request('type'));
    } 
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

Route::get('/deleteoffer/{id}', function($id){
    $offer= Offer::find($id);
    $offer->delete();
    return redirect("manage-offers");
});

Route::get('/deleteuser/{id}', function($id){
    $user= User::find($id);
    $user->delete();
    return redirect("manage-users");
});