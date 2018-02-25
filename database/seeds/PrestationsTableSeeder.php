<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrestationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestations= array
        (

            array
            (
                'nomdeprestation' => 'Soin purifiant 1h15',
                'duree' => '01:25:00',
                'prix' => '130',

            ),

            array
            (
                'nomdeprestation' => 'Soin complet du visage et du buste 2h',
                'duree' => '01:20:00',
                'prix' => '150',

            ),

            array
            (
                'nomdeprestation' => 'Soin Hydradermie Double Ionisation 1h15`',
                'duree' => '01:25:00',
                'prix' => '130',

            ),

            array
            (
                'nomdeprestation' => 'Soin Hydradermie Lift 1h15',
                'duree' => '01:25:00',
                'prix' => '130',

            ),

            array
            (
                'nomdeprestation' => 'Soin Hydradermie Lift Antirides Yeux 30',
                'duree' => '00:30:00',
                'prix' => '75',

            ),


        );
        foreach($prestations as $prestation)
        {
            DB::table('prestations')->insert($prestation);
        }

    }
}
