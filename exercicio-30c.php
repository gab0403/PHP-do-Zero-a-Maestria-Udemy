<?php


$arr = [];

for($i = 10; $i <= 10; $i++) {
    array_push($arr, $i);
}
 
print_r($arr);

for($i = 0; $i < count($arr); $i++) {
        $numeroAtual = $arr[$i];
            if ($numeroAtual % 2 != 0 ) {
                echo $arr[$i];
            } 
     }


?>
