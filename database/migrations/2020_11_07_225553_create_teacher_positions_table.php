<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_positions', function (Blueprint $table) {
            $table->bigIncrements('tcp_id');
            $table->foreignId('tcp_teacher_id');
            $table->foreign('tcp_teacher_id')->references('tcr_id')->on('teachers');
            $table->foreignId('tcp_position_type_id');
            $table->foreign('tcp_position_type_id')->references('pst_id')->on('position_types');

            $table->bigInteger('tcp_created_by')->unsigned()->nullable();
            $table->bigInteger('tcp_updated_by')->unsigned()->nullable();
            $table->bigInteger('tcp_deleted_by')->unsigned()->nullable();

            $table->foreign('tcp_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('tcp_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('tcp_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
                 
            $table->timestamp('tcp_created_at')->nullable();
            $table->timestamp('tcp_updated_at')->nullable();
            $table->timestamp('tcp_deleted_at')->nullable();
            $table->string('tcp_sys_note')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
