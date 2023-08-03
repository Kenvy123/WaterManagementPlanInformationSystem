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
        Schema::create('mill_domestic_maps', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->string('mill_domestic_map_mill_area');
            $table->string('mill_domestic_map_oh_area');
            $table->string('mill_domestic_map_ws_area');
            $table->string('mill_domestic_map_wtp_area');
            $table->string('mill_domestic_map_rz_area');
            $table->string('mill_domestic_map_ss_area');
            $table->string('mill_domestic_map_topo_map');
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
        Schema::dropIfExists('mill_domestic_maps');
    }
};
