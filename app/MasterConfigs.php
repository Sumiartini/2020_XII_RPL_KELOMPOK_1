<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterConfigs extends Model
{
    protected $table = "master_configs";
    protected $primaryKey = 'msc_id';
    const CREATED_AT = 'msc_created_at';
    const UPDATED_AT = 'msc_updated_at';
    protected $guarded = [];

}
