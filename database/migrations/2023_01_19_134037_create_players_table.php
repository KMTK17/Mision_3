<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('lastname',45);
            $table->integer('score');
            $table->timestamps();
        });

        Schema::table('players', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');

            $table->foreign('team_id')->references('id')->on('teams');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};