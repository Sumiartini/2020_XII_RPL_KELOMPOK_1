<?php

function mappingData($data, $model){
    // dd($data, $model);
    $type = $data->mapToGroups(function ($item, $key) {
        // dd($item, $key);
        $grouped = [$item->std_type => [$item->std_key => $item->std_value]];
        return $grouped; 
    });

    $mapped = mappingKeyType($type, $model);
    // dd($type, $mapped);
    return $mapped;
}

function mappingDataStaff($data, $model){
    
    $type = $data->mapToGroups(function ($item, $key) {
        $grouped = [$item->sfd_type => [$item->sfd_key => $item->sfd_value]];
        return $grouped; 
    });

    $mapped = mappingKeyType($type, $model);

    return $mapped;
}

function mappingDataTeacher($data, $model){
    
    $type = $data->mapToGroups(function ($item, $key) {
        $grouped = [$item->tcd_type => [$item->tcd_key => $item->tcd_value]];
        return $grouped; 
    });

    $mapped = mappingKeyType($type, $model);

    return $mapped;
}

function mappingKeyType($type, $model){

    foreach ($type as $key => $value) {
        $keyMapped = $value->flatMap(function ($values) {
            return $values;
        });

        $model -> $key = $keyMapped;
    }
    // dd($keyMapped, $type, $key, $value);
    return $model;
}