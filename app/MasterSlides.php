<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterSlides extends Model
{
    protected $table = "master_slides";
    protected $primaryKey = 'mss_id';
    const CREATED_AT = 'mss_created_at';
    const UPDATED_AT = 'mss_updated_at';
    protected $guarded = [];

}
