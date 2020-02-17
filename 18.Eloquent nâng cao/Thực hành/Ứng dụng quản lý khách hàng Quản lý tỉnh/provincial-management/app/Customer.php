<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function city(){

        return $this->belongsTo('App\City');
      }

      public function phone(){

        return $this->hasOne(Phone::class);
      }
}
