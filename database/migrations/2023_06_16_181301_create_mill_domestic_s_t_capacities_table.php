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
        Schema::create('mill_domestic_s_t_capacities', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_id');
            $table->decimal('mill_domestic_wtpst_stc');
            $table->decimal('mill_domestic_housing_stc');
            $table->decimal('mill_domestic_office_stc');
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
        Schema::dropIfExists('mill_domestic_s_t_capacities');
    }
};
