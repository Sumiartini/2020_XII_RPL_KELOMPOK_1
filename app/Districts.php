<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    protected $primaryKey = 'dst_id';
    const CREATED_AT = 'dst_created_at';
    const UPDATED_AT = 'dst_updated_at';
    protected $guarded = [];
}
