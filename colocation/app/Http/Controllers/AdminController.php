<?php

namespace App\Http\Controllers;
use Auth;
use App\Offer;
use App\User;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewoffers(){


        $offers = Offer::paginate(5);
        $array= array('offers'=>$offers);
        return view('manage-offers', $array);
    }
    public function viewusers(){


        $users = User::paginate(5);
        $array= array('users'=>$users);
        return view('manage-users', $array);
    }
}
