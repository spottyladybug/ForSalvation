<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBloodInScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_donate_blood', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_donor');
            $table->boolean('all_blood');
            $table->boolean('plazma');
            $table->boolean('platelets');
            $table->boolean('	erythrocytes');
            $table->boolean('granulocytes');
            $table->boolean('leukocytes');
        });

        Schema::table('schedule', function (Blueprint $table){
            $table->addColumn('integer', 'blood_components')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedule', function (Blueprint $table) {
            //
        });
    }
}
