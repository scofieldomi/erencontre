<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            
            $table->bigIncrements('idParticpant');
            
            $table->integer('par_IdPersonne')->unsigned();
            $table->integer('par_IdParticpant')->unsigned();
            $table->string('descriptionPart');

            $table->integer('idEntreprise')->unsigned();
            $table->foreign('idEntreprise')->references('idParticpant')->on('entreprise');

            $table->integer('idInscription')->unsigned();
            $table->foreign('idInscription')->references('idParticpant')->on('inscription');

            $table->integer('idPersonne')->unsigned();
            $table->foreign('idPersonne')->references('idParticpant')->on('personne');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
