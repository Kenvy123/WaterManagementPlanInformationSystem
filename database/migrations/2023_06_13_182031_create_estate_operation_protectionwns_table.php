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
        Schema::create('estate_operation_protectionwns', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->text('estate_operation_pwns_location_riparian');
            $table->text('estate_operation_pwns_riparian_reserve');
            $table->text('estate_operation_pwns_mf');
            $table->text('estate_operation_pwns_pic');
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
        Schema::dropIfExists('estate_operation_protectionwns');
    }
};
