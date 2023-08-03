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
        Schema::create('estate_domestic_w_t_plants', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->string('estate_domestic_wtp_pha_chemi');
            $table->string('estate_domestic_wtp_pha_chemi_dosage');
            $table->string('estate_domestic_wtp_coagulant_chemi');
            $table->string('estate_domestic_wtp_coagulant_chemi_dosage');
            $table->string('estate_domestic_wtp_flocculent_chemi');
            $table->string('estate_domestic_wtp_flocculent_chemi_dosage');
            $table->string('estate_domestic_wtp_filter_chemi');
            $table->string('estate_domestic_wtp_filter_chemi_dosage');
            $table->string('estate_domestic_wtp_chlorine_chemi');
            $table->string('estate_domestic_wtp_chlorine_chemi_dosage');
            $table->string('estate_domestic_wtp_other_chemi');
            $table->string('estate_domestic_wtp_other_chemi_dosage');
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
        Schema::dropIfExists('estate_domestic_w_t_plants');
    }
};
