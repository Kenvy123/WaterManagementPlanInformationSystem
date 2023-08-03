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
        Schema::create('mill_domestic_w_a_t_l_communities', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_domestic_watlc_list_stake');
            $table->string('mill_domestic_watlc_feedback_stake');
            $table->string('mill_domestic_watlc_infoplan_stake');
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
        Schema::dropIfExists('mill_domestic_w_a_t_l_communities');
    }
};
