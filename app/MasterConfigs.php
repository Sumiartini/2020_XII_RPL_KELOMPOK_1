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

    public static function getMasterConfigs($request){
        $master_configs = MasterConfigs::select('msc_id', 'msc_name', 'msc_description', 'msc_is_active' );
        
        return $master_configs;
    }


}
