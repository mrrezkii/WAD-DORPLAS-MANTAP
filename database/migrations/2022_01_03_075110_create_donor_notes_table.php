<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_notes', function (Blueprint $table) {
            $table->id('id_donor_notes');
            $table->string('id_donators')->references('id_donators')->on('donators');
            $table->string('id_institutions')->references('id_institutions')->on('institutions');
            $table->string('id_donor_events')->references('id_donor_events')->on('donor_events');
            $table->string('status_donor_notes')->references('id_status_donor')->on('status_donor');
            $table->string('schedule_donor_notes');
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
        Schema::dropIfExists('donor_notes');
    }
}
