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
            $table->uuid('id_donor_submissions')->unique()->primary();;
            $table->foreignUuid('id_donators');
            $table->foreignUuid('id_institutions');
            $table->string('recipient_donor_submissions');
            $table->string('applicant_donor_submissions');
            $table->string('blood_type_donor_submissions');
            $table->string('rhesus_type_donor_submissions');
            $table->integer('quantity_donor_submissions');
            $table->dateTime('time_used_donor_submissions')->nullable();
            $table->string('ktp_donor_submissions');
            $table->string('letter_donor_submissions');
            $table->tinyInteger('status_donor_submissions');
            $table->string('modified_by')->nullable();
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
