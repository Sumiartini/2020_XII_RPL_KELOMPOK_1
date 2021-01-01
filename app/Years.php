<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
	protected $table = 'school_years';
    protected $primaryKey = 'scy_id';
    const CREATED_AT = 'scy_created_at';
    const UPDATED_AT = 'scy_updated_at';
    protected $guarded = [];

    public static function getSchoolYears($request){
        $school_years = Years::select('scy_name','scy_is_active');
        return $school_years;
    }
}
