<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donators', function (Blueprint $table) {
            $table->id('id_donators');
            $table->string('name_donators');
            $table->string('email_donators')->unique();
            $table->string('password_donators');
            $table->string('blood_type_donators');
            $table->string('blood_rhesus_donators');
            $table->string('contact_donators');
            $table->string('address_donators');
            $table->string('point_donators');
            $table->string('profile_images_donators')->nullable();
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
        Schema::dropIfExists('donators');
    }
}
