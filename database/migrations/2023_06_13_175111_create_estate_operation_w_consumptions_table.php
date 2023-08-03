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
        Schema::create('estate_operation_w_consumptions', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->decimal('estate_operation_workshop_wc');
            $table->decimal('estate_operation_pre_mc_wc');
            $table->decimal('estate_operation_trf_wc');
            $table->decimal('estate_operation_nursery_wc');
            $table->decimal('estate_operation_ls_wc');
            $table->string('estate_operation_other_wc_name');
            $table->decimal('estate_operation_other_wc');
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
        Schema::dropIfExists('estate_operation_w_consumptions');
    }
};
