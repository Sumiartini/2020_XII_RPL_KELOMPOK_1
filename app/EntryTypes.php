<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryTypes extends Model
{
    protected $primaryKey = 'ent_id';
    const CREATED_AT = 'ent_created_at';
    const UPDATED_AT = 'ent_updated_at';
    protected $guarded = [];
}
