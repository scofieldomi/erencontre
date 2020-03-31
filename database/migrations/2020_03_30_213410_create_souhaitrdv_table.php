<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouhaitrdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souhaitrdv', function (Blueprint $table) {
            
            $table->bigIncrements('idSouh');
            $table->time('heureDebut');
            $table->string('temps');
            $table->time('heureCreuse');
            $table->integer('numTable');


            $table->integer('idEntreprise')->unsigned();
            $table->foreign('IdEntreprise')->references('idSouh')->on('entreprise');

            $table->integer('idForum')->unsigned();
            $table->foreign('IdForum')->references('idSouh')->on('forum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('souhaitrdv');
    }
}
