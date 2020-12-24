<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_details', function (Blueprint $table) {
            $table->bigIncrements('sfd_id');
            $table->foreignId('sfd_teacher_id');
            $table->foreign('sfd_teacher_id')->references('stf_id')->on('staffs');
            $table->string('sfd_type');
            $table->string('sfd_key');
            $table->string('sfd_value');

            $table->bigInteger('sfd_created_by')->unsigned()->nullable();
            $table->bigInteger('sfd_updated_by')->unsigned()->nullable();
            $table->bigInteger('sfd_deleted_by')->unsigned()->nullable();
  
            $table->foreign('sfd_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('sfd_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('sfd_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('sfd_created_at')->nullable();
            $table->timestamp('sfd_updated_at')->nullable();
            $table->timestamp('sfd_deleted_at')->nullable();
            $table->string('sfd_sys_note')->nullable();
            
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
