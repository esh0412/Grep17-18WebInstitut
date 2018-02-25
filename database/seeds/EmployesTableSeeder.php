<?php

use Illuminate\Database\Seeder;

class EmployesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employes = array
      (


          array
          (
              'nomemp' => 'Tan',
              'prenomemp' => 'Tan',
              'institut_id' => '4',

          ),

          array
          (
              'nomemp' => 'Oanh',
              'prenomemp' => 'Marie',
              'institut_id' => '2',

          ),


          array
          (
              'nomemp' => 'Vahn',
              'prenomemp' => 'Amélie',
              'institut_id' => '2',


          ),

          array
          (
              'nomemp' => 'Pham',
              'prenomemp' => 'Anna',
              'institut_id' => '5',



          ),
          array
          (
              'nomemp' => 'Vin',
              'prenomemp' => 'Laure',
              'institut_id' => '3',

          ),

      );
      foreach($employes as $employe)
      {
          DB::table('employes')->insert($employe);
      }
    }
}
