<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Provinces;
use App\StaffDetails;

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
            ->where('users.usr_is_regist', 1);
        return $staffs;
    }

    public static function getStaffsProspective($request)
    {

        $staffs_prospective = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
            // ->join('majors', 'students.stu_major_id','=','majors.mjr_id')
            ->where('staffs.stf_registration_status', 0)
            ->where('users.usr_is_regist', 1)
            ->where('users.usr_is_active', 1);
        // dd($staff_prospective);
        return $staffs_prospective;
    }

    public function getStaffProsvectiveDetail($staffID)
    {
        $staffs_prospective = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
            ->where('stf_id', $staffID)->firstOrFail();

        $staff_prospective_details = StaffDetails::where('sfd_staff_id', $staffs_prospective->stf_id)->get();
        $staff_prospective_details = mappingDataStaff($staff_prospective_details, $staffs_prospective);
        //dd($staffs_prospective);
        return $staff_prospective_details;
}
    public static function getStaffsRejected($request)
    {

        $staffs_rejected = Staffs::join('users', 'staffs.stf_user_id', '=', 'users.usr_id')
            // ->join('majors', 'students.stu_major_id','=','majors.mjr_id')
            ->where('staffs.stf_registration_status', 2)
            ->where('users.usr_is_regist', 1)
            ->where('users.usr_is_active', 0);
        // dd($staffs_rejected);
        return $staffs_rejected;
    }
    
    }
