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
        Schema::create('mill_operation_w_consumptions', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->decimal('mill_operation_processing_ffb_wc');
            $table->decimal('mill_operation_workshop_wc');
            $table->decimal('mill_operation_lab_wc');
            $table->string('mill_operation_other_wc_name');
            $table->decimal('mill_operation_other_wc');
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
        Schema::dropIfExists('mill_operation_w_consumptions');
    }
};
