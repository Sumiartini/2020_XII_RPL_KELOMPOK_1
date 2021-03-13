<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table = 'classes';
    protected $primaryKey = 'cls_id';
    const CREATED_AT = 'cls_created_at';
    const UPDATED_AT = 'cls_updated_at';
    protected $guarded = [];

    public static function getClasses($request)
    {
	    $classes = Classes::join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')
        ->join('majors','classes.cls_major_id','=','majors.mjr_id')
        ->join('school_years','classes.cls_school_year_id','=','school_years.scy_id')
        ->orderBy('cls_grade_level_id')->orderBy('cls_major_id')
        ->select('classes.cls_id','classes.cls_is_active', 'classes.cls_number','grade_levels.grl_name','majors.mjr_name','scy_name');
        return $classes;
    }

}
