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
        Schema::create('mill_domestic_p_f_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->decimal('mill_domestic_rnr_pfr');
            $table->decimal('mill_domestic_rwtp_pfr');
            $table->decimal('mill_domestic_wtps_pfr');
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
        Schema::dropIfExists('mill_domestic_p_f_rates');
    }
};
