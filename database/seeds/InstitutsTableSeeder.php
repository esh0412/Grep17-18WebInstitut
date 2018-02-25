<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InstitutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instituts = array
        (

            array
            (
                'nominstitut' => 'Institut Just For You (Bouchet)',
                'adresse' => 'Chemin charles georg 1',
                'telephone' => '0227744512',
                'codepostal' => '1209',
                'canton'=>'Genève',

            ),

            array
            (
                'nominstitut' => 'Institut Just For You (Cornavin)',
                'adresse' => 'Rue argand 2',
                'telephone' => '0227412120',
                'codepostal' => '1201',
                'canton'=>'Genève',

            ),

            array
            (
                'nominstitut' => 'Institut Just For You (Petit Lancy)',
                'adresse' => 'Route de chancy 71',
                'telephone' => '0227332525',
                'codepostal' => '1213',
                'canton'=>'Lancy',

            ),

            array
            (
                'nominstitut' => 'Institut Just For You (Eaux Vives)',
                'adresse' => 'Rue des Vollandes 16',
                'telephone' => '0227366983',
                'codepostal' => '1207',
                'canton'=>'Genève',

            ),

            array
            (
                'nominstitut' => 'Institut Just For You (Montreux)',
                'adresse' => 'Grand Rue 68',
                'telephone' => '0219681818',
                'codepostal' => '1820',
                'canton'=>'Montreux',

            ),


        );
        foreach($instituts as $institut)
        {
            DB::table('instituts')->insert($institut);
        }

    }
}
