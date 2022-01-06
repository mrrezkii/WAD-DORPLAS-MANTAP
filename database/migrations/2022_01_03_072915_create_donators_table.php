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
            $table->uuid('id_donators')->unique()->primary();
            $table->string('name_donators');
            $table->string('email_donators')->unique();
            $table->string('password_donators');
            $table->string('gender_donators')->nullable();
            $table->string('blood_type_donators');
            $table->string('rhesus_type_donators');
            $table->string('contact_donators');
            $table->text('address_donators');
            $table->integer('point_donators')->default(0);
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
