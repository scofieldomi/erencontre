<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePauseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pause', function (Blueprint $table) {
            
            $table->bigIncrements('idPause');
            $table->time('heurePause');

            $table->integer('idActivite')->unsigned();
            $table->foreign('idActivite')->references('idPause')->on('activitesjournaliere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pause');
    }
}
