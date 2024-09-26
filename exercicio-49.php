<?php

$nome = "gato";
$idade = 2;
$cor = 'amarelo';

$arr = compact("nome", "idade", "cor");

for ($i=0; $i < count($arr); $i++) { 
    print_r($arr);
}