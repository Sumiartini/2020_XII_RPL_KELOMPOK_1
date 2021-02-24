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
	    $classes = Classes::join('grade_levels','classes.cls_grade_level_id','=','grade_levels.grl_id')->join('majors','classes.cls_major_id','=','majors.mjr_id')->orderBy('cls_grade_level_id')->orderBy('cls_major_id');
        return $classes;
    }

}
