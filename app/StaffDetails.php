<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffDetails extends Model
{
    protected $primaryKey = 'sfd_id';
    const CREATED_AT = 'sfd_created_at';
    const UPDATED_AT = 'sfd_updated_at';
    protected $guarded = [];
}
