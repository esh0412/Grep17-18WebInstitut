<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PkFkRendezvousPrestations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('prestation_rendezvous', function (Blueprint $table) {

        $table->foreign('rdv_id')->references('id')->on('rendezvous')
                          ->onDelete('restrict')
                          ->onUpdate('restrict');

        $table->foreign('prestation_id')->references('id')->on('prestations')
                          ->onDelete('restrict')
                          ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('prestation_rendezvous', function(Blueprint $table) {
            $table->dropForeign('preatations_rdv_id_foreign');
      });
    }
}
