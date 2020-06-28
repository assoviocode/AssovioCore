<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_website', function (Blueprint $table) {
            $table->id('id');
            $table->string('email')->nullable(false);
            $table->string('phone');
            $table->string('subject')->nullable(false);
            $table->string('message')->nullable(false);
            $table->string('sent')->default(false);
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
        Schema::dropIfExists('contact_website');
    }
}
