<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumInStaffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->unsignedBigInteger('stf_school_year_id')->nullable();
            $table->foreign('stf_school_year_id')->references('scy_id')->on('school_years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->unsignedBigInteger('stf_school_year_id')->nullable();
            $table->foreign('stf_school_year_id')->references('scy_id')->on('school_years')->onDelete('cascade');
        });
    }
}
