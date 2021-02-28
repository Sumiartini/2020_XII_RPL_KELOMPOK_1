<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPayments extends Model
{
	protected $table = "student_payments";
    protected $primaryKey = 'stp_id';
    const CREATED_AT = 'stp_created_at';
    const UPDATED_AT = 'stp_updated_at';
    protected $guarded = [];
}
