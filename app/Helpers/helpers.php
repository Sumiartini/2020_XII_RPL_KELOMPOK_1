<?php

function mappingData($data, $model){
    
    $type = $data->mapToGroups(function ($item, $key) {
        $grouped = [$item->std_type => [$item->std_key => $item->std_value]];
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
    return $model;
}