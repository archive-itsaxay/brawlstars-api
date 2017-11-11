<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brawler_id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('skill_type')->nullable();
            $table->double('range')->nullable();
            $table->double('recharge_time')->nullable();
            $table->double('damage')->nullable();
            $table->double('attack_delay')->nullable();
            $table->double('healing_station_attack_range')->nullable();
            $table->double('healing_station_health')->nullable();

            $table->foreign('brawler_id')->references('id')->on('brawlers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
