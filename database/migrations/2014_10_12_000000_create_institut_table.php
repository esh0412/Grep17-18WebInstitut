<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nominstitut');
            $table->string('adresse');
            $table->integer('telephone');
            $table->string('codepostal');
            $table->string('canton');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituts');
    }
}
