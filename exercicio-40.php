<?php

$str = "O rato roeu a roupa do rei de Roma";
$contadorDeA = 0;

for($i = 0; $i < strlen($str); $i++) {

    if($str[$i] === "a"){
        $contadorDeA++;
    }
}
echo $contadorDeA;