<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testdetails', function (Blueprint $table) {
            $table->id();            
            $table->string('test_id');
            $table->string('dname')->nullable();
            $table->string('dv')->nullable();
            $table->string('unit')->nullable();
            $table->string('ndefault')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('testdetails');
    }
}
