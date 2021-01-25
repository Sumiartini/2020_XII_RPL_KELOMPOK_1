<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('cit_id');
            $table->foreignId('cit_province_id');
            $table->foreign('cit_province_id')->references('prv_id')->on('provinces');
            $table->string('cit_name');
            
            $table->biginteger('cit_created_by')->nullable();
            $table->biginteger('cit_updated_by')->nullable();
            $table->biginteger('cit_deleted_by')->nullable();
           
            $table->timestamp('cit_created_at')->nullable();
            $table->timestamp('cit_updated_at')->nullable();
            $table->timestamp('cit_deleted_at')->nullable();
            $table->string('cit_sys_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
