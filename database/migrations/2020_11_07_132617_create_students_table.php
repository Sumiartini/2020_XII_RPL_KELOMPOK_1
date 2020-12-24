<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('stu_id');
            $table->foreignId('stu_user_id');
            $table->foreign('stu_user_id')->references('usr_id')->on('users');
            $table->foreignId('stu_entry_type_id');
            $table->foreign('stu_entry_type_id')->references('ent_id')->on('entry_types');
            $table->foreignId('stu_school_year_id');
            $table->foreign('stu_school_year_id')->references('scy_id')->on('school_years');

            $table->string('stu_nis')->nullable();
            $table->string('stu_nisn');
            $table->string('stu_kip_number')->nullable();
            $table->tinyInteger('stu_registration_status');

            $table->bigInteger('stu_created_by')->unsigned()->nullable();
            $table->bigInteger('stu_updated_by')->unsigned()->nullable();
            $table->bigInteger('stu_deleted_by')->unsigned()->nullable();

            $table->foreign('stu_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stu_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stu_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            
            $table->timestamp('stu_created_at')->nullable();
            $table->timestamp('stu_updated_at')->nullable();
            $table->timestamp('stu_deleted_at')->nullable();
            $table->string('stu_sys_note')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
