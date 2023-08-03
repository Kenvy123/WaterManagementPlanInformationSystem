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
        Schema::create('mill_operation_p_f_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->decimal('mill_operation_rnr_pfr');
            $table->decimal('mill_operation_rwtp_pfr');
            $table->decimal('mill_operation_wtps_pfr');
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
        Schema::dropIfExists('mill_operation_p_f_rates');
    }
};
