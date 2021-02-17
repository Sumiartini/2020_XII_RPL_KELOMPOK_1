<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('stf_id');
            $table->foreignId('stf_user_id');
            $table->foreign('stf_user_id')->references('usr_id')->on('users');
            $table->string('stf_gtk')->nullable();
            $table->string('stf_nuptk')->nullable();
            $table->string('stf_entry_year')->nullable();
            $table->tinyInteger('stf_registration_status')->nullable();

            $table->bigInteger('stf_created_by')->unsigned()->nullable();
            $table->bigInteger('stf_updated_by')->unsigned()->nullable();
            $table->bigInteger('stf_deleted_by')->unsigned()->nullable();
            
            $table->foreign('stf_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stf_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('stf_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('stf_created_at')->nullable();
            $table->timestamp('stf_updated_at')->nullable();
            $table->timestamp('stf_deleted_at')->nullable();
            $table->string('stf_sys_note')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('staffs');
    }
}
