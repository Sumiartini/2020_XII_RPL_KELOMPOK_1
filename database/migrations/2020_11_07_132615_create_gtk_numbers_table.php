<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGtkNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gtk_numbers', function (Blueprint $table) {
            $table->id('gtn_id');
            $table->integer('gtn_number');
            
            $table->bigInteger('gtn_created_by')->unsigned()->nullable();
            $table->bigInteger('gtn_updated_by')->unsigned()->nullable();
            $table->bigInteger('gtn_deleted_by')->unsigned()->nullable();

            $table->foreign('gtn_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('gtn_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('gtn_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('gtn_created_at')->nullable();
            $table->timestamp('gtn_updated_at')->nullable();
            $table->timestamp('gtn_deleted_at')->nullable();
            $table->string('gtn_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gtk_numbers');
    }
}
