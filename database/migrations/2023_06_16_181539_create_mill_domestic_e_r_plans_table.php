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
        Schema::create('mill_domestic_e_r_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_domestic_erp_dsp');
            $table->string('mill_domestic_erp_dwsja');
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
        Schema::dropIfExists('mill_domestic_e_r_plans');
    }
};
