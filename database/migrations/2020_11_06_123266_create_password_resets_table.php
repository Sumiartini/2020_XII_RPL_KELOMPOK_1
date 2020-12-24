<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('pwr_email')->index();
            $table->string('pwr_token');
            $table->timestamp('pwr_created_at')->nullable();

            $table->timestamp('pwr_updated_at')->nullable();
            $table->timestamp('pwr_deleted_at')->nullable();
            $table->bigInteger('pwr_created_by')->unsigned()->nullable();
            $table->bigInteger('pwr_updated_by')->unsigned()->nullable();
            $table->bigInteger('pwr_deleted_by')->unsigned()->nullable();
            $table->string('pwr_sys_note')->nullable();

            $table->foreign('pwr_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('pwr_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('pwr_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
