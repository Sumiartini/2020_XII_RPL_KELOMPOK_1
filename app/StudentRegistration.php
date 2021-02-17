<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
	protected $primaryKey = 'str_id';
    const CREATED_AT = 'str_created_at';
    const UPDATED_AT = 'str_updated_at';
    const DELETED_AT = 'str_deleted_at';
    protected $guarded = [];
}
