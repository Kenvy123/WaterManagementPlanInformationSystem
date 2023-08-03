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
        Schema::create('estate_operation_flow_meters', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->integer('estate_operation_store_fm');
            $table->string('estate_operation_store_remark');
            $table->integer('estate_operation_ws_fm');
            $table->string('estate_operation_ws_remark');
            $table->integer('estate_operation_pmarea_fm');
            $table->string('estate_operation_pmarea_remark');
            $table->integer('estate_operation_tra_fm');
            $table->string('estate_operation_tra_remark');
            $table->integer('estate_operation_nursery_fm');
            $table->string('estate_operation_nursery_remark');
            $table->integer('estate_operation_lb_fm');
            $table->string('estate_operation_lb_remark');
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
        Schema::dropIfExists('estate_operation_flow_meters');
    }
};
