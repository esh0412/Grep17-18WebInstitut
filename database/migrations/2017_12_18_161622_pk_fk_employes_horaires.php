<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PkFkEmployesHoraires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('horaires', function (Blueprint $table) {

        $table->foreign('employe_id')->references('id')->on('employes')
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
      Schema::table('horaires', function (Blueprint $table) {
          $table->dropColumn('employe_id');
      });
    }
}
