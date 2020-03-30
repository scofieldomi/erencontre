<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->bigIncrements('iEntreprise');
            $table->string('designation');
            $table->string('numRCCM');
            $table->string('numUFI');
            $table->string('adresse');
            $table->string('email');
            $table->string('postal');
            $table->integer('idPays')->unsigned();
            $table->foreign('IdPays')->references('iEntreprise')->on('pays');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprise');
    }
}
