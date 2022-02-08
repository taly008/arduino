<?php

/*function getRGBFromTemper(float $temper) : string {
    if($temper < -273){
        return '#0037ff';
    }

    $arr = [
        '-273' => '#0037ff',
        '-30' => '#2f5bfd',
        '-20' => '#2f5bff',
        '0' => '#2f5bf2',
        '30' => '#2f5bf3',
    ];

    $arr_keys = array_keys($arr);

    foreach ($arr_keys as $key => $value){
        if($value == $temper){
            return $arr[$arr_keys[$key]];
        }
        if($value > $temper){
            return $arr[$arr_keys[$key - 1]];
        }
    }
}*/
