<?php


function getRGBFromTemper(float $temper) : string {
    if($temper < -35){
        return '#0037ff';
    }
    if($temper > 26){
        return '#FF7375';
    }

    $arr = [
        '-35' => '#0037ff',
        '-30' => '#33B1FF',
        '-20' => '#5CC0FF',
        '-5' => '#8AD2FF',
        '-1' => '#B0E1FF',
        '0' => '#FFFBA8',
        '5' => '#FFF766',
        '10' => '#FFF200',
        '15' => '#F6FFE8',
        '20' => '#C7FC77',
        '24' => '#C7FC77',
        '25' => '#FF9C9D',
        '26' => '#7DCF02'
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


};

function search_line(string $file_name, string $key_line) : string {

        $f = fopen($file_name, "rt");
        $lines = explode("\n", fread($f, filesize($file_name)));
        foreach ($lines as $line_num => $line) {
            $line_num++;
            if (strripos($line, $key_line) !== false) {
                $resultline[$line_num + 1] = $line;
                return 'да';
            }
        }

        return $key_line . ' нет в файле ' . $file_name;
    }



