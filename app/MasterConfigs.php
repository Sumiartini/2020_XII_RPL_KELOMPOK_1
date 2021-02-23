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
	    $master_configs = MasterConfigs::join('master_videos', 'master_configs.msc_master_video_id', '=', 'master_videos.msv_id');
        // dd($students);
        return $master_configs;
    }

}
