<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_types', function (Blueprint $table) {
            $table->bigIncrements('ent_id');
            $table->string('ent_name');

            $table->bigInteger('ent_created_by')->unsigned()->nullable();
            $table->bigInteger('ent_updated_by')->unsigned()->nullable();
            $table->bigInteger('ent_deleted_by')->unsigned()->nullable();
            
            $table->foreign('ent_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('ent_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('ent_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('ent_created_at')->nullable();
            $table->timestamp('ent_updated_at')->nullable();
            $table->timestamp('ent_deleted_at')->nullable();
            $table->string('ent_sys_note')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('entry_types');
    }
}
