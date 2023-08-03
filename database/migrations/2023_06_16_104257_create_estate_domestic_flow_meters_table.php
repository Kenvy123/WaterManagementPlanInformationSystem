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
        Schema::create('estate_domestic_flow_meters', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->integer('estate_domestic_ha_fm');
            $table->string('estate_domestic_ha_remark');
            $table->integer('estate_domestic_oa_fm');
            $table->string('estate_domestic_oa_remark');
            $table->integer('estate_domestic_otr_fm');
            $table->string('estate_domestic_otr_remark');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate_domestic_flow_meters');
    }
};
