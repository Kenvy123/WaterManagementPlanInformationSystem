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
        Schema::create('estate_operation_obstruction_rivers', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->string('estate_operation_orw_bund_application');
            $table->string('estate_operation_orw_bund_location');
            $table->string('estate_operation_orw_bund_remark');
            $table->string('estate_operation_orw_weir_application');
            $table->string('estate_operation_orw_weir_location');
            $table->string('estate_operation_orw_weir_remark');
            $table->string('estate_operation_orw_dam_application');
            $table->string('estate_operation_orw_dam_location');
            $table->string('estate_operation_orw_dam_remark');
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
        Schema::dropIfExists('estate_operation_obstruction_rivers');
    }
};
