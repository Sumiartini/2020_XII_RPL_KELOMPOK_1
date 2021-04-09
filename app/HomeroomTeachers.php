<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeroomTeachers extends Model
{
    protected $table = 'homeroom_teachers';
    protected $primaryKey = 'hrt_id';
    const CREATED_AT = 'hrt_created_at';
    const UPDATED_AT = 'hrt_updated_at';
    protected $guarded = [];

    public static function getHomeroomTeacher($request)
    {
	    $homeroom_teacher = HomeroomTeachers::join('teachers','homeroom_teachers.hrt_teacher_id','=','teachers.tcr_id')
        ->join('classes','homeroom_teachers.hrt_class_id','=','classes.cls_id')
        ->join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')
        ->join('majors','classes.cls_major_id','=','majors.mjr_id')
        ->join('school_years','classes.cls_school_year_id','=','school_years.scy_id')
        ->join('users', 'teachers.tcr_user_id', '=', 'users.usr_id')
        ->orderBy('hrt_class_id')
        ->select('homeroom_teachers.hrt_id','homeroom_teachers.hrt_is_active','users.usr_name', 'classes.cls_number','grade_levels.grl_name','majors.mjr_name');
        return $homeroom_teacher;
    }
}
