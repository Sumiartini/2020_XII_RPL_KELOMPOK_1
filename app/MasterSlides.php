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

	public static function getMasterSlides($request){
	    $master_slides = MasterSlides::select('mss_id', 'mss_name', 'mss_file', 'mss_is_active');
	    return $master_slides;
    }

}
