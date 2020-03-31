<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogistiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistique', function (Blueprint $table) {
            $table->bigIncrements('idLogistique');
            $table->date('dateLo');
            $table->string('arrive');
            $table->string('depart');
            $table->string('vol');
            $table->date('numDoc');

            $table->integer('idPersonne')->unsigned();
            $table->foreign('idPersonne',)->references('idLogistique')->on('personne');

            $table->integer('idParticpant')->unsigned();
            $table->foreign('idParticpant')->references('idLogistique')->on('particpants');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logistique');
    }
}
