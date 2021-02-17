<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColoumRegistrationStatusAndEntryTypeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function($table) {
            
            $table->dropForeign('students_stu_school_year_id_foreign');
            $table->dropColumn('stu_school_year_id');
            $table->dropColumn('stu_registration_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
