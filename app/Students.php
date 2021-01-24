<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentDetails;

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
	    ->where('users.usr_is_regist', 1)
	    ->where('users.usr_is_active', 1);
	    // dd($students);
	    return $students;
    }
    public static function getStudentProspective($request)
    {
    	
	    $students_prospective = Students::join('users', 'students.stu_user_id','=','users.usr_id')
	    ->join('majors', 'students.stu_major_id','=','majors.mjr_id')
	    ->where('students.stu_registration_status', 0)
	    ->where('users.usr_is_regist', 1)
	    ->where('users.usr_is_active', 1);
	    // dd($students_prospective);
	    return $students_prospective;
    }
    public function getStudentProsvectiveDetail($studentID)
    {
        // dd("kesini model");
    	$students_prospective = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
    	->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
    	->where('stu_id', $studentID)->firstOrFail();
 
    	$student_prospective_details = StudentDetails::where('std_student_id', $students_prospective->stu_id)->get();
    	$student_prospective_details = mappingData($student_prospective_details, $students_prospective);

    	return $student_prospective_details;
    }
    public static function getStudentRejected($request)
    {
        
        $students_rejected = Students::join('users', 'students.stu_user_id','=','users.usr_id')
        ->join('majors', 'students.stu_major_id','=','majors.mjr_id')
        ->where('students.stu_registration_status', 2)
        ->where('users.usr_is_regist', 1)
        ->where('users.usr_is_active', 0);
        // dd($students_rejected);
        return $students_rejected;
    }
    public function getStudentRejectedDetail($studentID)
    {
        $students_rejected = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
        ->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
        ->where('stu_id', $studentID)->firstOrFail();
 
        $student_rejected_details = StudentDetails::where('std_student_id', $students_rejected->stu_id)->get();
        $student_rejected_details = mappingData($student_rejected_details, $students_rejected);

        return $student_rejected_details;
    }
    public function getStudentEdit($studentID)
    {
        // dd($studentID);
        $students_edit = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
        ->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
        ->where('stu_id', $studentID)->firstOrFail();
 
        $get_student_edit = StudentDetails::where('std_student_id', $students_edit->stu_id)->get();
        $get_student_edit = mappingData($get_student_edit, $students_edit);

        return $get_student_edit;
    }

}
