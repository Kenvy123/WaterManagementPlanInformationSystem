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
        Schema::create('mill_operation_protectionwns', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->text('mill_operation_pwns_location_riparian');
            $table->text('mill_operation_pwns_riparian_reserve');
            $table->text('mill_operation_pwns_mf');
            $table->text('mill_operation_pwns_pic');
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
        Schema::dropIfExists('mill_operation_protectionwns');
    }
};
