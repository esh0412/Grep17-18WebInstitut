<?php

use Illuminate\Database\Seeder;

class HorairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $horaires = array
    (


        array
        (
            'jour' => 'Tan',
            'deb_heure' => 'Tan',
            'fin_heure' => 'Tan',
            'employe_id' => '4',

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
    foreach($horaires as $horaire)
    {
        DB::table('horaires')->insert($horaire);
    }
    }
}
