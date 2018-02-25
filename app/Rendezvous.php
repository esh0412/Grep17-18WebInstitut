<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
  protected $table ='rendezvous';

  public function prestations()
  {
    return $this->belongsToMany('App\Prestation', 'prestation_rendezvous', 'rdv_id', 'prestation_id');
  }

  public function utilisateur()
    {
        return $this->belongsTo('App\User');
    }
}
