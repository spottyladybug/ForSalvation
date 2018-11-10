<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HospitalsSeeder', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number', 15);
            $table->decimal('location_x', 10, 7);
            $table->decimal('location_y', 10, 7);
            $table->string('code');
            $table->unsignedInteger('hospital_time_id');
            $table->unsignedInteger('blood_necessity_id');
            $table->unsignedInteger('blood_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HospitalsSeeder');
    }
}
