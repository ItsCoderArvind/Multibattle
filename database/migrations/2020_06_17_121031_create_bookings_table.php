<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bno');
            $table->date('date');
            $table->string('sirName');
            $table->string('name');
            $table->string('sex');
            $table->string('age');
            $table->string('doctype')->nullable();
            $table->string('docnum')->nullable();
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('doctor_id');
            $table->string('sample')->nullable();
            $table->string('takenby')->nullable();
            $table->string('centrename')->nullable();
            $table->string('url')->nullable();
            $table->string('status')->nullable();
            $table->string('des')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
