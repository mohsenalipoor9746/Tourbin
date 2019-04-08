<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeRecordingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_recordings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('timein');
            $table->string('timeout');
            $table->string('Leaveclock')->nullable();
            $table->string('text')->nullable();
            $table->string('Delay');
            $table->string('Daily')->nullable();
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
        Schema::dropIfExists('time_recordings');
    }
}
