<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PkFkInstitutsEmployes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('employes', function (Blueprint $table) {

        $table->foreign('institut_id')->references('id')->on('instituts')
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
      Schema::table('employes', function (Blueprint $table) {
          $table->dropColumn('institut_id');
      });
    }
}
