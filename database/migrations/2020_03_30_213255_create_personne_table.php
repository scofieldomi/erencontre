<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne', function (Blueprint $table) {
            $table->bigIncrements('idPersonne');
            $table->string('nom');
            $table->string('prenom');
            $table->date('naissance');
            $table->string('lieu');
            $table->string('contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personne');
    }
}
