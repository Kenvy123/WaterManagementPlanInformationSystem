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
        Schema::create('mill_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('mill_form_year');
            $table->string('mill_unit_name');
            $table->string('mill_commission_info');
            $table->string('mill_throughput');
            $table->integer('mill_staff_exe');
            $table->integer('mill_staff_exed');
            $table->integer('mill_workers');
            $table->integer('mill_worker_dep');
            $table->integer('mill_total_housing');
            $table->string('mill_general_remark');
            $table->decimal('mill_Jan');
            $table->decimal('mill_Feb');
            $table->decimal('mill_Mar');
            $table->decimal('mill_Apr');
            $table->decimal('mill_May');
            $table->decimal('mill_Jun');
            $table->decimal('mill_Jul');
            $table->decimal('mill_Aug');
            $table->decimal('mill_Sep');
            $table->decimal('mill_Oct');
            $table->decimal('mill_Nov');
            $table->decimal('mill_Dec');
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
        Schema::dropIfExists('mill_forms');
    }
};
