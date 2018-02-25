<?php

namespace App\Http\Controllers;

use App\Institut;
use App\Prestation;
use App\Rendezvous;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    public function index(){

      $instituts = Institut::all();
      $prestations = Prestation::all();


      return view('reservations.index', compact('prestations','instituts'));

    }

    public function createRDV(){
      $prestations = Input::get('id_pres');
      $rdv = new Rendezvous;


      $rdv->heure = request('heure');
      $rdv->date = request('date');
      $rdv->save();
      $rdv->prestations()->attach($prestations);





      return redirect('/');
    }


}
