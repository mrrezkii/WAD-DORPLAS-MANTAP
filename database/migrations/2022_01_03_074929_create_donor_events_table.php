<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_events', function (Blueprint $table) {
            $table->id('id_donor_events');
            $table->string('id_institutions')->references('id_institutions')->on('institutions');
            $table->string('name_donor_events');
            $table->string('start_donor_events');
            $table->string('end_donor_events');
            $table->string('desc_donor_events');
            $table->string('point_donor_events');
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
        Schema::dropIfExists('donor_events');
    }
}
