<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Offer;


class OfferController extends Controller
{
    public function viewoffers(){


        $offers = Offer::paginate(5);
        $array= array('offers'=>$offers);
        return view('offers', $array);
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
}
