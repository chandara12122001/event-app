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
            $table->string('title');
            $table->date('event_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('interested')->nullable()->default(0);
            $table->integer('price')->nullable();
            $table->integer('going')->nullable()->default(0);
            $table->integer('no_of_seats');
            // $table->integer('user_id')->nullable();
            $table->integer('location_id')->nullable();
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
