<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PkFkEmployesPrestations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('pres_emp', function (Blueprint $table) {

        $table->foreign('emp_id')->references('id')->on('employes')
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
      Schema::table('pres_emp', function(Blueprint $table) {
            $table->dropForeign('preatations_emp_id_foreign');
      });
    }
}
