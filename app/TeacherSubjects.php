<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherSubjects extends Model
{
    protected $primaryKey = 'tcs_id';
    const CREATED_AT = 'tcs_created_at';
    const UPDATED_AT = 'tcs_updated_at';
    protected $guarded = [];
}
