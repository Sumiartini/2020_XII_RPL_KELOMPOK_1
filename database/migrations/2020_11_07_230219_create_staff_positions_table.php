<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_positions', function (Blueprint $table) {
            $table->bigIncrements('stp_id');
            $table->foreignId('stp_staff_id');
            $table->foreign('stp_staff_id')->references('stf_id')->on('staffs');
            $table->foreignId('stp_position_type_id');
            $table->foreign('stp_position_type_id')->references('pst_id')->on('position_types');
            
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
         Schema::dropIfExists('staff_positions');
    }
}
