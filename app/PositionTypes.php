<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionTypes extends Model
{
	protected $table = 'position_types';
    protected $primaryKey = 'pst_id';
    const CREATED_AT = 'pst_created_at';
    const UPDATED_AT = 'pst_updated_at';
    protected $guarded = [];

    public static function getPositionTypes($request){
        $position_types = PositionTypes::all();

        return $position_types;
    }
}
