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
        Schema::create('mill_domestic_w_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_domestic_bf_ph');
            $table->string('mill_domestic_bf_do');
            $table->string('mill_domestic_bf_bod');
            $table->string('mill_domestic_bf_cod');
            $table->string('mill_domestic_bf_tss');
            $table->string('mill_domestic_bf_an');
            $table->string('mill_domestic_bf_ong');
            $table->string('mill_domestic_bf_turbidity');
            $table->string('mill_domestic_bf_other_parameter_value');
            $table->string('mill_domestic_bf_other_parameter_name');
            $table->string('mill_domestic_wqm_bf_qmf');
            $table->string('mill_domestic_af_tc');
            $table->string('mill_domestic_af_ecoli');
            $table->string('mill_domestic_af_turbidity');
            $table->string('mill_domestic_af_ph');
            $table->string('mill_domestic_af_frc');
            $table->string('mill_domestic_af_iron');
            $table->string('mill_domestic_af_manganese');
            $table->string('mill_domestic_af_other_parameter_value');
            $table->string('mill_domestic_af_other_parameter_name');
            $table->string('mill_domestic_wqm_af_qmf');
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
        Schema::dropIfExists('mill_domestic_w_monitorings');
    }
};
