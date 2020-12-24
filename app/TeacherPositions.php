<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherPositions extends Model
{
    protected $primaryKey = 'tcp_id';
    const CREATED_AT = 'tcp_created_at';
    const UPDATED_AT = 'tcp_updated_at';
    protected $guarded = [];
}
