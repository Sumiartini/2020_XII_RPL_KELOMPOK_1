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
	    $majors = Majors::all();
	    return $majors;
    }
}
