<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('prop');
            $table->string('adresse');
            $table->string('mail');
            $table->string('phone');
            $table->string('ville');
            $table->string('type');
            $table->float('prix');
            $table->float('nuit');
            $table->longText('description');
            $table->string('wifi')->nullable();
            $table->integer('chambre');
            $table->boolean('tv')->nullable();
            $table->boolean('fumeur')->nullable();
            $table->boolean('meuble')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('cuisine')->nullable();
            $table->boolean('clim')->nullable();
            $table->boolean('bain')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
