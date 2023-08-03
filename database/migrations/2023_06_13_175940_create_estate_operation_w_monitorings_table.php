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
        Schema::create('estate_operation_w_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->string('estate_operation_wqm_ph');
            $table->string('estate_operation_wqm_do');
            $table->string('estate_operation_wqm_bod');
            $table->string('estate_operation_wqm_cod');
            $table->string('estate_operation_wqm_tss');
            $table->string('estate_operation_wqm_an');
            $table->string('estate_operation_wqm_ong');
            $table->string('estate_operation_wqm_turbidity');
            $table->string('estate_operation_other_parameter_value');
            $table->string('estate_other_parameter_name');
            $table->string('estate_operation_rw_qmf');
            $table->string('estate_gw_parameter_value');
            $table->string('estate_gw_parameter_name');
            $table->string('estate_operation_gw_qmf');
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
        Schema::dropIfExists('estate_operation_w_monitorings');
    }
};
