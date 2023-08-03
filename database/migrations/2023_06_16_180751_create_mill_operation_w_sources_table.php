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
        Schema::create('mill_operation_w_sources', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_operation_river_water_name');
            $table->string('mill_operation_river_water_abstraction');
            $table->longText('mill_operation_use_of_river_water');
            $table->string('mill_operation_ground_water_name');
            $table->string('mill_operation_ground_water_abstraction');
            $table->longText('mill_operation_use_of_ground_water');
            $table->string('mill_operation_reservoir_name');
            $table->string('mill_operation_reservoir_abstraction');
            $table->longText('mill_operation_use_of_reservoir_water');
            $table->string('mill_operation_natural_pond_name');
            $table->string('mill_operation_natural_pond_abstraction');
            $table->longText('mill_operation_use_of_natural_pond_water');
            $table->string('mill_operation_local_authority_name');
            $table->string('mill_operation_local_authority_abstraction');
            $table->longText('mill_operation_use_of_local_authority_water');
            $table->string('mill_operation_rain_water_harvesting_abstraction');
            $table->longText('mill_operation_use_of_harvesting_water');
            $table->string('mill_operation_other_name');
            $table->string('mill_operation_other_abstraction');
            $table->longText('mill_operation_use_of_other_water');
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
        Schema::dropIfExists('mill_operation_w_sources');
    }
};
