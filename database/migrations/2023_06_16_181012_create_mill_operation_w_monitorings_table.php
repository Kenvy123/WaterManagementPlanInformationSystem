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
        Schema::create('mill_operation_w_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_operation_wqm_ph');
            $table->string('mill_operation_wqm_do');
            $table->string('mill_operation_wqm_bod');
            $table->string('mill_operation_wqm_cod');
            $table->string('mill_operation_wqm_tss');
            $table->string('mill_operation_wqm_an');
            $table->string('mill_operation_wqm_ong');
            $table->string('mill_operation_wqm_turbidity');
            $table->string('mill_operation_other_parameter_value');
            $table->string('mill_other_parameter_name');
            $table->string('mill_operation_rw_qmf');
            $table->string('mill_gw_parameter_value');
            $table->string('mill_gw_parameter_name');
            $table->string('mill_operation_gw_qmf');
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
        Schema::dropIfExists('mill_operation_w_monitorings');
    }
};
