<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $primaryKey = 'stf_id';
    const CREATED_AT = 'stf_created_at';
    const UPDATED_AT = 'stf_updated_at';
    protected $guarded = [];

    public static function getStaffs($request)
    {
        $staffs = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
            ->where('staffs.stf_registration_status', 1)
            ->where('users.usr_is_accepted', 1)
            ->where('users.usr_is_active', 1);
        return $staffs;
    }
}
