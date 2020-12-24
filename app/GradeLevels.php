<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeLevels extends Model
{
    protected $primaryKey = 'grl_id';
    const CREATED_AT = 'grl_created_at';
    const UPDATED_AT = 'grl_updated_at';
    protected $guarded = [];
}
