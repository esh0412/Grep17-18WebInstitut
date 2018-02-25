<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    public function intitut(){
      return $this->belongsTo('App\Institut');
    }

    public function horaire(){
      return $this->hasMany('App\Horaire');
    }
}
