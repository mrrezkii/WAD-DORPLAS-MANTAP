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
            $table->id();
            $table->unsignedBigInteger('id_donators');
            $table->foreign('id_donators')->references('id')->on('donators');
            $table->unsignedBigInteger('id_institutions');
            $table->foreign('id_institutions')->references('id')->on('institutions');
            $table->string('blood_type_donor_notes');
            $table->string('blood_rhesus_donor_notes');
            $table->string('schedule_donor_notes');
            $table->string('certificate_donor_notes');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('status');
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
