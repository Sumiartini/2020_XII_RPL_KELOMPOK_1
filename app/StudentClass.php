<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
	protected $table = "student_classes";
    protected $primaryKey = 'stc_id';
    const CREATED_AT = 'stc_created_at';
    const UPDATED_AT = 'stc_updated_at';
    protected $guarded = [];
}
