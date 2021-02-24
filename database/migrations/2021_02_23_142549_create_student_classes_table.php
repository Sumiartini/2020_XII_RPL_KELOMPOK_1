<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->bigIncrements('stc_id');
            $table->bigInteger('stc_student_id')->unsigned();
            $table->foreign('stc_student_id')->references('stu_id')->on('students')->onDelete('cascade');

            $table->bigInteger('stc_class_id')->unsigned();
            $table->foreign('stc_class_id')->references('cls_id')->on('classes')->onDelete('cascade');

            $table->bigInteger('stc_created_by')->unsigned()->nullable();
            $table->bigInteger('stc_updated_by')->unsigned()->nullable();
            $table->bigInteger('stc_deleted_by')->unsigned()->nullable();

            $table->foreign('stc_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stc_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stc_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('stc_created_at')->nullable();
            $table->timestamp('stc_updated_at')->nullable();
            $table->timestamp('stc_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_classes');
    }
}
