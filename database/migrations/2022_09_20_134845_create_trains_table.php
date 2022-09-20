<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure', 50);
            $table->string('arrival', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('reference', 12);
            $table->tinyInteger('carriages')->unsigned();
            $table->tinyInteger('delay')->unsigned();
            $table->boolean('is_deleted')->default(0);
            $table->float('price', 3, 2);
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
        Schema::dropIfExists('trains');
    }
}
