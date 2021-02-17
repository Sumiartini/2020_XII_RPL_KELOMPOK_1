<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->bigIncrements('str_id');
            $table->bigInteger('str_student_id')->nullable()->unsigned();
            $table->foreign('str_student_id')->references('stu_id')->on('students')->onDelete('cascade');

            $table->foreignId('str_school_year_id')->nullable()->unsigned();
            $table->foreign('str_school_year_id')->references('scy_id')->on('school_years')->onDelete('cascade');

            $table->tinyinteger('str_status')->nullable();
            $table->string('str_reason')->nullable();

            $table->bigInteger('str_created_by')->unsigned()->nullable();
            $table->bigInteger('str_updated_by')->unsigned()->nullable();
            $table->bigInteger('str_deleted_by')->unsigned()->nullable();

            $table->foreign('str_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('str_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('str_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('str_created_at')->nullable();
            $table->timestamp('str_updated_at')->nullable();
            $table->timestamp('str_deleted_at')->nullable();
            $table->string('str_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
}
