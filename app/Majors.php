<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
	protected $table = "majors";
    protected $primaryKey = 'mjr_id';
    const CREATED_AT = 'mjr_created_at';
    const UPDATED_AT = 'mjr_updated_at';
    protected $guarded = [];

    public static function getMajors($request)
    {
	    $majors = Majors::select(
            'mjr_id',
            'mjr_name',
            'mjr_is_active');
        return $majors;
    }
    public function getMajorEdit($majorID)
    {
        // dd($majorID);
        $major_edit = Majors::where('mjr_id', $majorID)->firstOrFail();
        return $major_edit;
    }
}
