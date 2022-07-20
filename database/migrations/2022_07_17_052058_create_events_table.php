<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('event_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('interested')->nullable()->default(0);
            $table->double('price')->nullable();
            $table->integer('no_of_seats')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('images');
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
        Schema::dropIfExists('events');
    }
}
