<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;
use App\Districts;

class JsonController extends Controller
{
    public function JsonCities($id){
        $cities = Cities::where('cit_province_id' , $id)->get();
        return response()->json(compact('cities', $cities));
    }

    public function JsonDistricts($id){
        $districts = Districts::where('dst_city_id' , $id)->get();
        return response()->json(compact('districts', $districts));
    }
}
