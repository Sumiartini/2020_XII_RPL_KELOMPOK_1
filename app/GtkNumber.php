<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GtkNumber extends Model
{
    protected $primaryKey = 'gtn_id';
    const CREATED_AT = 'gtn_created_at';
    const UPDATED_AT = 'gtn_updated_at';
    protected $guarded = [];
}
