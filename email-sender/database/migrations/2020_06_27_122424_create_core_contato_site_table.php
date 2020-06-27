<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreContatoSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_contato_site', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('core_contato_site');
    }
}
