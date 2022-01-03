<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_banks', function (Blueprint $table) {
            $table->id('id_blood_bank');
            $table->string('id_institutions')->references('id_institutions')->on('institutions');
            $table->string('a_positive_blood_bank');
            $table->string('a_negative_blood_bank');
            $table->string('b_positive_blood_bank');
            $table->string('b_negative_blood_bank');
            $table->string('ab_positive_blood_bank');
            $table->string('ab_negative_blood_bank');
            $table->string('o_positive_blood_bank');
            $table->string('o_negative_blood_bank');
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
        Schema::dropIfExists('blood_banks');
    }
}
