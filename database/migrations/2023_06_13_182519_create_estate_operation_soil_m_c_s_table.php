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
        Schema::create('estate_operation_soil_m_c_s', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->string('estate_operation_efb_application');
            $table->integer('estate_operation_efb_ta');
            $table->string('estate_operation_efb_mf');
            $table->string('estate_operation_dc_application');
            $table->integer('estate_operation_dc_ta');
            $table->string('estate_operation_dc_mf');
            $table->string('estate_operation_ba_application');
            $table->integer('estate_operation_ba_ta');
            $table->string('estate_operation_ba_mf');
            $table->string('estate_operation_shell_application');
            $table->integer('estate_operation_shell_ta');
            $table->string('estate_operation_shell_mf');
            $table->string('estate_operation_fiber_application');
            $table->integer('estate_operation_fiber_ta');
            $table->string('estate_operation_fiber_mf');
            $table->string('estate_operation_sp_application');
            $table->integer('estate_operation_sp_ta');
            $table->string('estate_operation_sp_mf');
            $table->string('estate_operation_sdp_application');
            $table->integer('estate_operation_sdp_ta');
            $table->string('estate_operation_sdp_mf');
            $table->string('estate_operation_fs_application');
            $table->integer('estate_operation_fs_ta');
            $table->string('estate_operation_fs_mf');
            $table->string('estate_operation_othr_application');
            $table->integer('estate_operation_othr_ta');
            $table->string('estate_operation_othr_mf');
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
        Schema::dropIfExists('estate_operation_soil_m_c_s');
    }
};
