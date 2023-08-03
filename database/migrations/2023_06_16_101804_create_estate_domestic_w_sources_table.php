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
        Schema::create('estate_domestic_w_sources', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->string('estate_domestic_river_water_name');
            $table->string('estate_domestic_river_water_abstraction');
            $table->longText('estate_domestic_use_of_river_water');
            $table->string('estate_domestic_ground_water_name');
            $table->string('estate_domestic_ground_water_abstraction');
            $table->longText('estate_domestic_use_of_ground_water');
            $table->string('estate_domestic_reservoir_name');
            $table->string('estate_domestic_reservoir_abstraction');
            $table->longText('estate_domestic_use_of_reservoir_water');
            $table->string('estate_domestic_natural_pond_name');
            $table->string('estate_domestic_natural_pond_abstraction');
            $table->longText('estate_domestic_use_of_natural_pond_water');
            $table->string('estate_domestic_local_authority_name');
            $table->string('estate_domestic_local_authority_abstraction');
            $table->longText('estate_domestic_use_of_local_authority_water');
            $table->string('estate_domestic_rain_water_harvesting_abstraction');
            $table->longText('estate_domestic_use_of_harvesting_water');
            $table->string('estate_domestic_other_name');
            $table->string('estate_domestic_other_abstraction');
            $table->longText('estate_domestic_use_of_other_water');
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
        Schema::dropIfExists('estate_domestic_w_sources');
    }
};
