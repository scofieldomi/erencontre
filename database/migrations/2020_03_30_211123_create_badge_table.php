<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badge', function (Blueprint $table) {
            
            
          
            $table->bigIncrements('idBadge');
            $table->string('description');

            $table->integer('idForum')->unsigned();
            $table->foreign('idForum')->references('idBadge')->on('forum');

            $table->integer('idPersonne')->unsigned();;
            $table->foreign('idPersonne')->references('idBadge')->on('personne');

            $table->integer('idParticpant')->unsigned();
            $table->foreign('idParticpant')->references('idBadge')->on('participants');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('badge');
    }
}
