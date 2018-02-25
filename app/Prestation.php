<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    
    public function rendezvous(){
      return $this->belongsToMany('App\Rendezvous');
    }
}
