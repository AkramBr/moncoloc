<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $table='photos';
    public function offer(){
        return $this->belongsTo('App\Offer');
    }
}
