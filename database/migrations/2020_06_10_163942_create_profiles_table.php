<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('doctor1');
            $table->string('doctor2')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->string('fax')->nullable();
            $table->string('timings');            
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
        Schema::dropIfExists('profiles');
    }
}
