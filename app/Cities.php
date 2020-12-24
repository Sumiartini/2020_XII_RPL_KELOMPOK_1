<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $primaryKey = 'cit_id';
    const CREATED_AT = 'cit_created_at';
    const UPDATED_AT = 'cit_updated_at';
    protected $guarded = [];
}
