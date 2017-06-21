<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use Image;
class UserController extends Controller
{


    public function profile(){
         return view('profile', array('user'=>Auth::user()));
    }
   
    public function update_avatar(Request $request){

        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save (public_path('uploads/avatars/'. $filename));
            $user = Auth::user();
            $user->avatar =$filename;
            $user->save();
        }
        return view('profile', array('user'=>Auth::user()));
    }

    public function upadate_profile(Request $request){

        if ($request->isMethod('post')){
            $user = Auth::user();  
            $user->name=$request->input('name');
            $user->age=$request->input('age');
            $user->email=$request->input('email');
            $user->type=$phone->input('phone');
            $user->save();
            return redirect('profile');

        }
        else {
            

        return view('profile', array('user'=>Auth::user()));
        }
        
    }


}
