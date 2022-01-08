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
            $table->uuid('id_donor_notes')->unique()->primary();;
            $table->foreignUuid('id_donators');
            $table->foreignUuid('id_institutions');
            $table->foreignUuid('id_donor_events')->nullable();
            $table->tinyInteger('status_donor_notes');
            $table->date('schedule_donor_notes');
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
        Schema::dropIfExists('donor_notes');
    }
}
