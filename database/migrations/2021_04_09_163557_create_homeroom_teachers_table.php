<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeroomTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeroom_teachers', function (Blueprint $table) {
            $table->bigIncrements('hrt_id');
            $table->foreignId('hrt_teacher_id');
            $table->foreign('hrt_teacher_id')->references('tcr_id')->on('teachers');
            $table->foreignId('hrt_class_id');
            $table->foreign('hrt_class_id')->references('cls_id')->on('classes');

            $table->boolean('hrt_is_active');

            $table->bigInteger('hrt_created_by')->unsigned()->nullable();
            $table->bigInteger('hrt_updated_by')->unsigned()->nullable();
            $table->bigInteger('hrt_deleted_by')->unsigned()->nullable();
            
            $table->foreign('hrt_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('hrt_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('hrt_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('hrt_created_at')->nullable();
            $table->timestamp('hrt_updated_at')->nullable();
            $table->timestamp('hrt_deleted_at')->nullable();
            $table->string('hrt_sys_note')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homeroom_teachers');
    }
}
