<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
	protected $table = 'subjects';
    protected $primaryKey = 'sbj_id';
    const CREATED_AT = 'sbj_created_at';
    const UPDATED_AT = 'sbj_updated_at';
    protected $guarded = [];

     public static function getSubjects($request){
        $subjects = Subjects::all();

        return $subjects;
    }
}
