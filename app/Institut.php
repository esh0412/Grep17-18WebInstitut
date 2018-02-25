<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institut extends Model
{
  protected $fillable = ['nominstitut', 'adresse','telephone','codepostal','canton'];
  public function employes()
  {
    return $this->hasMany('App\Employe');
  }
}
