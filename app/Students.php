<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentDetails;
use App\EntryTypes;
use App\Majors;
use App\User;

class Students extends Model
{
    protected $table = "students";
    protected $primaryKey = 'stu_id';
    const CREATED_AT = 'stu_created_at';
    const UPDATED_AT = 'stu_updated_at';
    protected $guarded = [];

    public static function getStudents($request)
    {
        $students = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('student_registrations', 'student_registrations.str_student_id','=','students.stu_id')
            ->where('student_registrations.str_status', 1)
            ->orWhere('student_registrations.str_status', 6)
            ->where('users.usr_is_regist', 1)
            ->select('users.usr_id', 'users.usr_is_active','students.stu_id','students.stu_candidate_name','students.stu_nis');
        // dd($students);
        return $students;
    }
    public static function getListStudentReRegistration($request)
    {
        $student_re_registrations = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('student_registrations', 'student_registrations.str_student_id','=','students.stu_id')
            ->where('student_registrations.str_status', 5)
            ->select('users.usr_id', 'users.usr_is_active','students.stu_id','students.stu_candidate_name','students.stu_nis');
        return $student_re_registrations;
    }

    public function getStudentDetail($studentID)
    {
        $students = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
            ->join('entry_types', 'students.stu_entry_type_id', '=', 'entry_types.ent_id')
            ->join('student_registrations','student_registrations.str_student_id','=','students.stu_id')
            ->join('school_years','student_registrations.str_school_year_id','=','school_years.scy_id')
            ->where('stu_id', $studentID)->firstOrFail();
        // dd($students);
        $student_details = StudentDetails::where('std_student_id', $students->stu_id)->where('std_deleted_at', null)->get();
        // dd($student_details);
        $student_details = mappingData($student_details, $students);
        // dd($student_details);
        return $student_details;
    }

    public static function getStudentProspective($request)
    {
        $students_prospective = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('student_registrations', 'student_registrations.str_student_id','=','students.stu_id')
            ->where('student_registrations.str_status', 0)
            ->where('users.usr_is_regist', 1)
            ->select('users.usr_id','users.usr_is_active','students.stu_id','students.stu_candidate_name','students.stu_school_origin');            
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
    public function getStudentPendingVeification($studentID)
    {
        // dd("kesini model");
        $students_prospective = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
            ->where('stu_user_id', $studentID)->firstOrFail();

        $student_prospective_details = StudentDetails::where('std_student_id', $students_prospective->stu_id)->get();
        $student_prospective_details = mappingData($student_prospective_details, $students_prospective);

        return $student_prospective_details;
    }
    public static function getStudentRejected($request)
    {

        $students_rejected = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('student_registrations', 'student_registrations.str_student_id','=','students.stu_id')
            ->where('student_registrations.str_status', 2)
            ->where('users.usr_is_regist', 1)
            ->select('students.stu_id', 'students.stu_candidate_name','students.stu_school_origin');
        // dd($students_rejected);
        return $students_rejected;
    }
    public function getStudentRejectedDetail($studentID)
    {
        $students_rejected = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            // ->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
            ->join('student_registrations', 'student_registrations.str_student_id','=','students.stu_id')
            ->where('stu_id', $studentID)->firstOrFail();

        $student_rejected_details = StudentDetails::where('std_student_id', $students_rejected->stu_id)->get();
        $student_rejected_details = mappingData($student_rejected_details, $students_rejected);

        return $student_rejected_details;
    }

    public static function getStudentPayment($request)
    {

        $students_payment = Students::join('student_payments', 'student_payments.stp_student_id', '=', 'students.stu_id')
            ->whereNotNull('student_payments.stp_picture')
            ->where('student_payments.stp_type_payment', 1);
        return $students_payment;
    }

    public static function getSchoolPayment($request)
    {
        $schools_payment = StudentPayments::join('students', 'student_payments.stp_student_id', '=', 'students.stu_id')
            ->whereNotNull('student_payments.stp_picture')
            ->where('student_payments.stp_type_payment', 2)->groupBy('student_payments.stp_student_id');
        
        return $schools_payment;
    }

    public function getStudentEdit($studentID)
    {
        // dd($studentID);
        $students_edit = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            /*->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')*/
            ->where('stu_id', $studentID)->firstOrFail();

        $get_student_edit = StudentDetails::where('std_student_id', $students_edit->stu_id)->get();
        $get_student_edit = mappingData($get_student_edit, $students_edit);

        return $get_student_edit;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'stu_user_id');
    }

    public static function getListStudentMove($request)
    {
         $student_move = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('student_registrations', 'student_registrations.str_student_id', '=', 'students.stu_id')
            ->where('student_registrations.str_status', 4);
        // dd($students_rejected);
        return $student_move;
    }
    public static function getListStudentDropOut($request)
    {
         $student_move = Students::join('users', 'students.stu_user_id', '=', 'users.usr_id')
            ->join('student_registrations', 'student_registrations.str_student_id', '=', 'students.stu_id')
            ->where('student_registrations.str_status', 3);
        // dd($students_rejected);
        return $student_move;
    }
}
