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
        Schema::create('mill_operation_waste_w_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_operation_wwm_bod_limit_discharge');
            $table->string('mill_operation_wwm_bod_mf');
            $table->string('mill_operation_wwm_cod_limit_discharge');
            $table->string('mill_operation_wwm_cod_mf');
            $table->string('mill_operation_wwm_ts_limit_discharge');
            $table->string('mill_operation_wwm_ts_mf');
            $table->string('mill_operation_wwm_ss_limit_discharge');
            $table->string('mill_operation_wwm_ss_mf');
            $table->string('mill_operation_wwm_ong_limit_discharge');
            $table->string('mill_operation_wwm_ong_mf');
            $table->string('mill_operation_wwm_an_limit_discharge');
            $table->string('mill_operation_wwm_an_mf');
            $table->string('mill_operation_wwm_tn_limit_discharge');
            $table->string('mill_operation_wwm_tn_mf');
            $table->string('mill_operation_wwm_ph_limit_discharge');
            $table->string('mill_operation_wwm_ph_mf');
            $table->string('mill_operation_wwm_temp_limit_discharge');
            $table->string('mill_operation_wwm_temp_mf');
            $table->text('mill_operation_wwm_pond_name');
            $table->text('mill_operation_wwm_size');
            $table->text('mill_operation_wwm_capacity');
            $table->text('mill_operation_wwm_r_time');
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
        Schema::dropIfExists('mill_operation_waste_w_monitorings');
    }
};
