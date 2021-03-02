<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_payments', function (Blueprint $table) {
            $table->bigIncrements('stp_id');
            $table->foreignId('stp_student_id');
            $table->foreign('stp_student_id')->references('stu_id')->on('students');
            $table->string('stp_payment_method')->nullable();
            $table->string('stp_picture')->nullable();
            $table->string('stp_reason')->nullable();
            $table->tinyInteger('stp_payment_status')->default('0');
            $table->date('stp_date')->nullable();
            $table->date('stp_date_verification')->nullable();

            $table->bigInteger('stp_created_by')->unsigned()->nullable();
            $table->bigInteger('stp_updated_by')->unsigned()->nullable();
            $table->bigInteger('stp_deleted_by')->unsigned()->nullable();

            $table->foreign('stp_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stp_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stp_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            
            $table->timestamp('stp_created_at')->nullable();
            $table->timestamp('stp_updated_at')->nullable();
            $table->timestamp('stp_deleted_at')->nullable();
            $table->string('stp_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_payments');
    }
}
