<?php

$arr = range(10, 45);

for ($i=10; $i < count($arr) ; $i++) { 
    $sum = $arr[$i] + 6;

    echo "$sum <br>";

    if($sum > 30) {
        echo "O número é muito alto: ";
    }
}

print_r($sum);