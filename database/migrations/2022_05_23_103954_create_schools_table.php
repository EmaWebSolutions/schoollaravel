<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('school_info')->nullable();
            $table->integer('status');
            $table->integer('running_session')->nullable();
            $table->timestamps();
            $table->string('school_currency')->nullable();
            $table->string('currency_position')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
