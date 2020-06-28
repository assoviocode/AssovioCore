<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('key')->nullable(false);
            $table->timestamps();
        });

        Schema::table('contact_website', function (Blueprint $table) {
            $table->foreignId('client_id');
            $table->foreign('client_id')
                ->references('id')
                ->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
