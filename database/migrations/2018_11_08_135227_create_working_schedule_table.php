<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkingScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('monday_start');
            $table->string('monday_finish');

            $table->string('tuesday_start');
            $table->string('tuesday_finish');

            $table->string('wednesday_start');
            $table->string('wednesday_finish');

            $table->string('thursday_start');
            $table->string('thursday_finish');

            $table->string('friday_start');
            $table->string('friday_finish');

            $table->string('saturday_start');
            $table->string('saturday_finish');

            $table->string('sunday_start');
            $table->string('sunday_finish');
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
        Schema::dropIfExists('working_schedule');
    }
}
