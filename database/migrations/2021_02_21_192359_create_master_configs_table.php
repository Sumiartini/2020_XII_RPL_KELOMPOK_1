<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_configs', function (Blueprint $table) {
            $table->bigIncrements('msc_id');
            $table->foreignId('msc_master_video_id')->nullable();
            $table->foreign('msc_master_video_id')->references('msv_id')->on('master_videos');
            $table->string('msc_name');
            $table->string('msc_description')->nullable();
            $table->string('msc_vision')->nullable();
            $table->string('msc_mision')->nullable();
            $table->string('msc_logo')->nullable();
            $table->string('msc_school_phone_number')->nullable();

            $table->tinyInteger('msc_is_active')->nullable();

            $table->bigInteger('msc_created_by')->unsigned()->nullable();
            $table->bigInteger('msc_updated_by')->unsigned()->nullable();
            $table->bigInteger('msc_deleted_by')->unsigned()->nullable();

            $table->foreign('msc_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('msc_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('msc_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('msc_created_at')->nullable();
            $table->timestamp('msc_updated_at')->nullable();
            $table->timestamp('msc_deleted_at')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_configs');
    }
}
