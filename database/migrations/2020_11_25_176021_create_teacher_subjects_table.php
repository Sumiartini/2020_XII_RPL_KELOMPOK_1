<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSubjectsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_subjects', function (Blueprint $table) {
            $table->bigIncrements('tcs_id');
            $table->foreignId('tcs_teacher_id');
            $table->foreign('tcs_teacher_id')->references('tcr_id')->on('teachers');
            $table->foreignId('tcs_subject_id');
            $table->foreign('tcs_subject_id')->references('sbj_id')->on('subjects');
            $table->foreignId('tcs_class_id');
            $table->foreign('tcs_class_id')->references('cls_id')->on('classes');
            $table->string('tcs_teaching_hours');

            $table->bigInteger('tcs_created_by')->unsigned()->nullable();
            $table->bigInteger('tcs_updated_by')->unsigned()->nullable();
            $table->bigInteger('tcs_deleted_by')->unsigned()->nullable();
            
            $table->foreign('tcs_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('tcs_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('tcs_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('tcs_created_at')->nullable();
            $table->timestamp('tcs_updated_at')->nullable();
            $table->timestamp('tcs_deleted_at')->nullable();
            $table->string('tcs_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_subjects');
    }
}
