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
        Schema::create('mill_domestic_a_education', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->text('mill_domestic_ae_np');
            $table->text('mill_domestic_ae_aop');
            $table->text('mill_domestic_ae_plan');
            $table->text('mill_domestic_ae_actual');
            $table->text('mill_domestic_ae_pic');
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
        Schema::dropIfExists('mill_domestic_a_education');
    }
};
