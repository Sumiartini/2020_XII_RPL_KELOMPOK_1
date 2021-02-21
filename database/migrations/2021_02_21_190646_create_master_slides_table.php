<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_slides', function (Blueprint $table) {
            $table->bigIncrements('mss_id');
            $table->string('mss_name');
            $table->string('mss_file');

            $table->bigInteger('mss_created_by')->unsigned()->nullable();
            $table->bigInteger('mss_updated_by')->unsigned()->nullable();
            $table->bigInteger('mss_deleted_by')->unsigned()->nullable();

            $table->foreign('mss_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('mss_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('mss_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('mss_created_at')->nullable();
            $table->timestamp('mss_updated_at')->nullable();
            $table->timestamp('mss_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_slides');
    }
}
