<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    protected $primaryKey = 'std_id';
    const CREATED_AT = 'std_created_at';
    const UPDATED_AT = 'std_updated_at';
    protected $guarded = [];
}
