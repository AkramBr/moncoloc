<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $table='offers';
    public function photos(){
        return $this->hasMany('App\Photo');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
