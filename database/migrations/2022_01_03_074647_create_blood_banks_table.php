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
        Schema::create('blood_bank', function (Blueprint $table) {
            $table->id('id_blood_bank');
            $table->unsignedBigInteger('id_institutions');
            $table->foreign('id_institutions')->references('id_institutions')->on('institutions');
            $table->integer('a_positive_blood_bank');
            $table->integer('a_negative_blood_bank');
            $table->integer('b_positive_blood_bank');
            $table->integer('b_negative_blood_bank');
            $table->integer('ab_positive_blood_bank');
            $table->integer('ab_negative_blood_bank');
            $table->integer('o_positive_blood_bank');
            $table->integer('o_negative_blood_bank');
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
        Schema::dropIfExists('blood_bank');
    }
}
