<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterVideos extends Model
{
     protected $primaryKey = 'msv_id';
    const CREATED_AT = 'msv_created_at';
    const UPDATED_AT = 'msv_updated_at';
    protected $guarded = [];
}
