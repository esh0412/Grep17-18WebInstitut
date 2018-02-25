<?php

namespace App\Http\Controllers;

use App\Horaire;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class HorairesController extends Controller
{
    public function index(){

      $horaires = Horaire::all();


      return view('test', compact('horaires'));

    }



}
