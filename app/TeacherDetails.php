<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherDetails extends Model
{
    protected $primaryKey = 'tcd_id';
    const CREATED_AT = 'tcd_created_at';
    const UPDATED_AT = 'tcd_updated_at';
    protected $guarded = [];
}
