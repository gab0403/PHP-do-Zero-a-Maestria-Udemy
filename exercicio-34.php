<?php

function parOuImpar($num) {
   if($num % 2 == 0) {
    echo "O número $num é par. <br>";
   }else{
    echo "O número $num é ímpar. <br>";
   }
}

parOuImpar(34);
parOuImpar(27);