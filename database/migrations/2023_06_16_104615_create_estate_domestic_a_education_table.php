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
        Schema::create('estate_domestic_a_education', function (Blueprint $table) {
            $table->id();
            $table->integer('estate_form_id');
            $table->text('estate_domestic_ae_np');
            $table->text('estate_domestic_ae_aop');
            $table->text('estate_domestic_ae_plan');
            $table->text('estate_domestic_ae_actual');
            $table->text('estate_domestic_ae_pic');
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
        Schema::dropIfExists('estate_domestic_a_education');
    }
};
