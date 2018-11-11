<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodNecessityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_necessity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('monday');
            $table->unsignedSmallInteger('tuesday');
            $table->unsignedSmallInteger('wednesday');
            $table->unsignedSmallInteger('thursday');
            $table->unsignedSmallInteger('friday');
            $table->unsignedSmallInteger('saturday');
            $table->unsignedSmallInteger('sunday');
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
        Schema::dropIfExists('blood_necessity');
    }
}
