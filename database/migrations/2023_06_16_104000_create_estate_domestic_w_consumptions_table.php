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
        Schema::create('estate_domestic_w_consumptions', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->decimal('estate_domestic_housing_wc');
            $table->decimal('estate_domestic_office_building_wc');
            $table->string('estate_domestic_other_wc_name');
            $table->decimal('estate_domestic_other_wc');
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
        Schema::dropIfExists('estate_domestic_w_consumptions');
    }
};
