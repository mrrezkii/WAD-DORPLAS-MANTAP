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
            $table->unsignedBigInteger('id_institutions');
            $table->foreign('id_institutions')->references('id_institutions')->on('institutions');
            $table->string('name_donor_events');
            $table->date('start_date_donor_events');
            $table->date('end_date_donor_events');
            $table->time('start_time_donor_events');
            $table->time('end_time_donor_events');
            $table->text('desc_donor_events');
            $table->string('thumbnail_donor_events')->nullable();
            $table->integer('point_donor_events');
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
