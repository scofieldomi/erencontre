<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisedomaineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprisedomaine', function (Blueprint $table) {
            $table->bigIncrements('idEntreDom');
            $table->integer('idDomaine')->unsigned();
            $table->foreign('idDomaine')->references('idEntreDom')->on('domainesactivites');
            
            $table->integer('idEntreprise')->unsigned();
            $table->foreign('idEntreprise')->references('idEntreDom')->on('entreprise');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprisedomaine');
    }
}
