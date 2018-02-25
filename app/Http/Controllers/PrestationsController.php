<?php

namespace App\Http\Controllers;

use App\Prestation;
use App\Category;
use App\Institut;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PrestationsController extends Controller
{
    public function index(){

      $prestations = Prestation::all();
      $instituts= Institut::all();
      $groupprestation = Prestation::all()->groupBy('category_id');

      return view('prestations.index', compact('prestations', 'instituts','groupprestation'));

    }


    public static function totalprix(){

      $str='';
      $listeprestations=Prestation::all('prix');

      foreach ($listeprestations as $k) {
        $str.='<br/>'.$k.'<input type="checkbox value="'.$k->prix.'"name="prix[]"/>';
      }

      return view('prestations.index', compact('$listeprestations'));
      //$test = Prestation::find($request);
      //$prixtotal = "1";
      //return view('prestations.test', compact('prixtotal'));
      //if (Input::get('listprestations') === '1')
      //{
            //$prixtotal = $request->input('listprestations');
      //     $prixtotal=1;


      //     return view('prestations.index', compact('prixtotal'));
            //$pritotal->writeln('test');
      //    }
      //    else
      //    {

      //    }

          //parcourt la liste de checkbox qui sont isCheck et récupérer chaque id ainsi que le prix.
          //+additionner




    }



}
