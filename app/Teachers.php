<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TeacherDetails;

class Teachers extends Model
{
    protected $primaryKey = 'tcr_id';
    const CREATED_AT = 'tcr_created_at';
    const UPDATED_AT = 'tcr_updated_at';
    protected $guarded = [];


    public static function getTeachers($request)
    {
        $teachers = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
            ->where('teachers.tcr_registration_status', 1)
            ->where('users.usr_is_regist', 1)
            ->orderBy('teachers.tcr_gtk');
        return $teachers;
    }

    public function getTeacherDetail($teacherID)
    {
        $teachers = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
            // ->join('majors', 'students.stu_major_id', '=', 'majors.mjr_id')
            // ->join('entry_types', 'students.stu_entry_type_id', '=', 'entry_types.ent_id')
            ->where('tcr_id', $teacherID)->firstOrFail();

        $teacher_details = TeacherDetails::where('tcd_teacher_id', $teachers->tcr_id)->where('tcd_deleted_at', null)->get();
        $teacher_details = mappingDataTeacher($teacher_details, $teachers);

        return $teacher_details;
    }

    public static function getTeachersProspective($request)
    {
        $teachers_prospective = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        ->where('teachers.tcr_registration_status', 0)
        ->where('users.usr_is_regist', 1)
        ->where('users.usr_is_active', 1);
        return $teachers_prospective;
    }

    public function getTeacherProsvectiveDetail($teacherID)
    {
        $teachers_prospective = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
            ->where('tcr_id', $teacherID)->firstOrFail();

        $teacher_prospective_details = TeacherDetails::where('tcd_teacher_id', $teachers_prospective->tcr_id)->get();
        $teacher_prospective_details = mappingDataTeacher($teacher_prospective_details, $teachers_prospective);
        //dd($teachers_prospective);
        return $teacher_prospective_details;
    }

    public static function getTeachersRejected($request)
    {

        $teachers_rejected = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
            ->where('teachers.tcr_registration_status', 2)
            ->where('users.usr_is_regist', 1)
            ->where('users.usr_is_active', 0);
        return $teachers_rejected;
    }

    public function getTeacherRejectedDetail($teacherID)
    {
        $teachers_Rejected = Teachers::join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
            ->where('tcr_id', $teacherID)->firstOrFail();

        $teacher_rejected_details = TeacherDetails::where('tcd_teacher_id', $teachers_rejected->tcr_id)->get();
        $teacher_rejected_details = mappingDataTeacher($teacher_rejected_details, $teachers_rejected);
        //dd($teachers_rejected);
        return $teacher_rejected_details;
    }

}
