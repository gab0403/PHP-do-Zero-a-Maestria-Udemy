<?php


    $arr = [];
    for ($i = 0; $i < 50; $i++) {
        return array_push($arr, $i);
    }
    // print_r($arr) . "<br>";



function arrayMaiorQueSete($array) {
    $returnArr = [];
    for($x = 0; $x < count($array); $x++) {
        if($array[$x] > 7) {
            array_push($returnArray, $array[$x]);
        }
    }
    return $returnArr;
}

echo arrayMaiorQueSete($arr);