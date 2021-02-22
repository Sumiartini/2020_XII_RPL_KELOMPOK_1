<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_videos', function (Blueprint $table) {
            $table->bigIncrements('msv_id');
            $table->string('msv_name');
            $table->string('msv_file');

            $table->bigInteger('msv_created_by')->unsigned()->nullable();
            $table->bigInteger('msv_updated_by')->unsigned()->nullable();
            $table->bigInteger('msv_deleted_by')->unsigned()->nullable();

            $table->foreign('msv_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('msv_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('msv_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('msv_created_at')->nullable();
            $table->timestamp('msv_updated_at')->nullable();
            $table->timestamp('msv_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_videos');
    }
}
