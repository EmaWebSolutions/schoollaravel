<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFeeManagersTable extends Migration
{
    public function up()
    {
        Schema::create('student_fee_managers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('total_amount');
            $table->integer('class_id');
            $table->integer('student_id');
            $table->integer('parent_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('paid_amount');
            $table->string('status');
            $table->integer('school_id');
            $table->integer('session_id');
            $table->integer('timestamp');
            $table->timestamps();
            $table->string('document_image')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_fee_managers');
    }
}
