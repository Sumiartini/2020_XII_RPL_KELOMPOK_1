<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $primaryKey = 'prv_id';
    const CREATED_AT = 'prv_created_at';
    const UPDATED_AT = 'prv_updated_at';
    protected $guarded = [];
}
