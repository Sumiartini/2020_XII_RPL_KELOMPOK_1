<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $primaryKey = 'cls_id';
    const CREATED_AT = 'cls_created_at';
    const UPDATED_AT = 'cls_updated_at';
    protected $guarded = [];
}
