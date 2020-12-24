<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id('fdj_id');
            $table->text('fdj_connection');
            $table->text('fdj_queue');
            $table->longText('fdj_payload');
            $table->longText('fdj_exception');
            $table->timestamp('fdj_failed_at')->useCurrent();

            $table->bigInteger('fdj_created_by')->unsigned()->nullable();
            $table->bigInteger('fdj_updated_by')->unsigned()->nullable();
            $table->bigInteger('fdj_deleted_by')->unsigned()->nullable();
            $table->timestamp('fdj_created_at')->nullable();
            $table->timestamp('fdj_updated_at')->nullable();
            $table->timestamp('fdj_deleted_at')->nullable();
            $table->string('stu_sys_note')->nullable();

            $table->foreign('fdj_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('fdj_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('fdj_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
