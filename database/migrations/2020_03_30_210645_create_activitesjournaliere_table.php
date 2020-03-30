<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitesjournaliereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitesjournaliere', function (Blueprint $table) {

            $table->bigIncrements('idActivite');
            $table->integer('idForum')->unsigned();
            $table->string('libelle');
            $table->date('dateDebut');
            $table->date('dateFin');

            $table->foreign('idForum')->references('idActivite')->on('forum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activitesjournaliere');
    }
}
