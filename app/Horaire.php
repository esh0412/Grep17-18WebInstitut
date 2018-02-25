<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    public function employe(){
      return $this->belongsTo('App\Employe');
    }
}
