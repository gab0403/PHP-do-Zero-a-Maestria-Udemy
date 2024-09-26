<?php

$arrMulti = [
  [1, 2, 3, 4],
  [50, 60, 70, 80],
  [100, 200, 300, 400],
];

for ($i=0; $i < count($arrMulti); $i++) { 
    echo "Array externo: " . ($i + 1);

    for ($x=0; $x < count($arrMulti[$i]); $x++) { 
        echo $arrMulti[$i][$x] . "<br>";
    }
    
}