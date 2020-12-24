<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
            ->where('users.usr_is_accepted', 1)
            ->where('users.usr_is_active', 1)->orderBy('teachers.tcr_gtk')->get();
        return $teachers;
    }
}
