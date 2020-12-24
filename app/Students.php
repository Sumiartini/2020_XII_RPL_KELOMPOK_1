<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $primaryKey = 'stu_id';
    const CREATED_AT = 'stu_created_at';
    const UPDATED_AT = 'stu_updated_at';
    protected $guarded = [];

    public static function getStudents($request)
    {
    	
	    $students = Students::join('users', 'students.stu_user_id','=','users.usr_id')
	    ->where('students.stu_registration_status', 1)
	    ->where('users.usr_is_accepted', 1)
	    ->where('users.usr_is_active', 1)->get();
	    // dd($students);
	    return $students;
    }
    public static function getStudentProspective($request)
    {
    	
	    $students_prospective = Students::join('users', 'students.stu_user_id','=','users.usr_id')
	    ->where('students.stu_registration_status', 0)
	    ->where('users.usr_is_accepted', 1)
	    ->where('users.usr_is_active', 1)->get();
	    // dd($students);
	    return $students_prospective;
    }
}
