<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Offer;


class OfferController extends Controller
{
    public function viewoffers(){

 if (request()->has('type')){
        $offers = Offer::where('type', request('type'))->paginate(5)->appends('type', request('type'));
    } 
    else if (request()->has('sort')) {
        $offers = Offer::orderBy('prix', request('sort'))->paginate(5)->appends(request('sort'));
    }
    else
    {
        $offers = Offer::paginate(5);
    }
    return view('offers')->with('offers',$offers);

    }

    public function AddOffer (Request $request){


        if ($request->isMethod('post')){
            $newoffer =new Offer();
            $newoffer->adresse=$request->input('adresse');
            $newoffer->ville=$request->input('ville');
            $newoffer->phone=$request->input('phone');
            $newoffer->mail=$request->input('mail');
            $newoffer->type=$request->input('type');
            $newoffer->prix=$request->input('prix');
            $newoffer->description=$request->input('description');
            $newoffer->titre=$request->input('titre');
            $newoffer->prop=$request->input('prop');
            $newoffer->chambre=$request->input('chambre');
            $newoffer->nuit=$request->input('nuit');


            $newoffer->save();
        }
        return view('publish');

    }
    
    public function viewDetails ( $id){
        
                $offers = Offer::find($id);
                $arr = array ('offers'=>$offers);
    
     return view('offerdetails',$arr);
    }

    public function index(){

       
    }
}
