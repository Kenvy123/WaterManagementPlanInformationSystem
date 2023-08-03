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
        Schema::create('mill_operation_flow_meters', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->integer('mill_operation_bs_fm');
            $table->integer('mill_operation_ws_fm');
            $table->integer('mill_operation_store_fm');
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
        Schema::dropIfExists('mill_operation_flow_meters');
    }
};
