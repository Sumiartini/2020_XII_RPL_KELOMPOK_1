<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->bigIncrements('dst_id');
            $table->foreignId('dst_city_id');
            $table->foreign('dst_city_id')->references('cit_id')->on('cities');
            $table->string('dst_name');
            
            $table->biginteger('dst_created_by')->nullable();
            $table->biginteger('dst_updated_by')->nullable();
            $table->biginteger('dst_deleted_by')->nullable();

            $table->timestamp('dst_created_at')->nullable();
            $table->timestamp('dst_updated_at')->nullable();
            $table->timestamp('dst_deleted_at')->nullable();
            $table->string('dst_sys_note')->nullable();
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
