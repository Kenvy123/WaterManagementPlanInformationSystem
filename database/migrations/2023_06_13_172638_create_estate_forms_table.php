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
        Schema::create('estate_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_year');
            $table->string('estate_unit_name');
            $table->string('estate_area_state');
            $table->string('estate_land_title');
            $table->string('estate_planting_profile');
            $table->string('estate_soil_type');
            $table->integer('estate_staff_exe');
            $table->integer('estate_staff_exed');
            $table->integer('estate_workers');
            $table->integer('estate_worker_dep');
            $table->integer('estate_total_housing');
            $table->string('estate_general_remark');
            $table->decimal('Jan');
            $table->decimal('Feb');
            $table->decimal('Mar');
            $table->decimal('Apr');
            $table->decimal('May');
            $table->decimal('Jun');
            $table->decimal('Jul');
            $table->decimal('Aug');
            $table->decimal('Sep');
            $table->decimal('Oct');
            $table->decimal('Nov');
            $table->decimal('Dec');
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
        Schema::dropIfExists('estate_forms');
    }
};
