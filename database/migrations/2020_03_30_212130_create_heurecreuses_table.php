<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeurecreusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heurecreuses', function (Blueprint $table) {
            $table->bigIncrements('idHeure');
            $table->time('heureCreuse');
            $table->integer('idActivite')->unsigned();
            $table->foreign('idActivite')->references('idHeure')->on('activitesjournaliere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heurecreuses');
    }
}
