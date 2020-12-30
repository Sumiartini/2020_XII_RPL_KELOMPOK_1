<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('usr_id');
            $table->bigInteger('usr_nik_or_kitas')->nullable();
            $table->string('usr_name');
            $table->string('usr_email')->unique();
            $table->string('usr_phone_number');
            $table->string('usr_whatsapp_number')->nullable();
            $table->string('usr_password');
            $table->string('usr_gender')->nullable();
            $table->string('usr_place_of_birth')->nullable();
            $table->date('usr_date_of_birth')->nullable();
            $table->foreignId('usr_district_id')->unique()->nullable();
            $table->foreign('usr_district_id')->references('dst_id')->on('districts');
            $table->string('usr_address')->nullable();
            $table->string('usr_rt')->nullable();
            $table->string('usr_rw')->nullable();
            $table->string('usr_postal_code')->nullable();
            $table->string('usr_rural_name')->nullable();
            $table->string('usr_religion')->nullable();
            $table->string('usr_profile_picture')->nullable();
            $table->boolean('usr_is_active'); //kolom ini digunakan untuk users jika value 1 maka aktif jika 0 maka tidak aktif jadi sebagai pengganti soft delete
            $table->boolean('usr_is_accepted');
            $table->datetime('usr_email_verified_at')->nullable();
            $table->string('usr_verification_token')->nullable();
            $table->string('usr_remember_token')->nullable();

            $table->bigInteger('usr_created_by')->unsigned()->nullable();
            $table->bigInteger('usr_updated_by')->unsigned()->nullable();
            $table->bigInteger('usr_deleted_by')->unsigned()->nullable();

            $table->foreign('usr_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('usr_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('usr_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');

            $table->timestamp('usr_created_at')->nullable();
            $table->timestamp('usr_updated_at')->nullable();
            $table->timestamp('usr_deleted_at')->nullable();
            $table->string('usr_sys_note')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
