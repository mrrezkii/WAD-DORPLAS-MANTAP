<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_submissions', function (Blueprint $table) {
            $table->id('id_donor_submission');
            $table->unsignedBigInteger('id_donators');
            $table->foreign('id_donators')->references('id_donators')->on('donators');
            $table->unsignedBigInteger('id_institutions');
            $table->foreign('id_institutions')->references('id_institutions')->on('institutions');
            $table->string('recipient_donor_submissions');
            $table->string('applicant_donor_submissions');
            $table->string('blood_type_donor_submissions');
            $table->string('rhesus_type_donor_submissions');
            $table->integer('quantity_donor_submissions');
            $table->string('time_used_donor_submissions');
            $table->string('ktp_donor_submissions');
            $table->string('letter_donor_submissions');
            $table->unsignedBigInteger('status_donor_submissions');
            $table->foreign('status_donor_submissions')->references('id_status_donor')->on('status_donor');
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
        Schema::dropIfExists('donor_submissions');
    }
}
