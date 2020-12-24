<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffPositions extends Model
{
    protected $primaryKey = 'stp_id';
    const CREATED_AT = 'stp_created_at';
    const UPDATED_AT = 'stp_updated_at';
    protected $guarded = [];
}
