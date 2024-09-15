<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$a = count($arr);
$b = 0;
 
 while($b <= $a) {
    $numeroAtual = $arr[$b];
        if ($numeroAtual == 30 || $numeroAtual == 40) {
                echo "é verdadeiro";
            $b++;
            continue;
        }
        
        $b++;
 }

?>
