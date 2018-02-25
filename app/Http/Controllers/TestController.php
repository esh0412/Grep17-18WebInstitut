<?php

namespace App\Http\Controllers;

use App\Institut;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class InstitutsController extends Controller
{
    public function index($test){

      $data['test'] = $test;
      return View::make('test', $data);

    }


}
