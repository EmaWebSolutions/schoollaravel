<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
{
    Schema::create('daily_attendances', function (Blueprint $table) {
        $table->id();
        $table->integer('class_id');
        $table->integer('section_id')->nullable();
        $table->integer('student_id');
        $table->integer('status');
        $table->integer('session_id')->nullable();
        $table->integer('school_id')->nullable();
        $table->bigInteger('timestamp'); // Change the column type to bigInteger
        $table->timestamps(); // Add created_at and updated_at columns
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_attendances');
    }
}
