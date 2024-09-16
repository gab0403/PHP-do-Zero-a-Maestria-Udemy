<?php


function retornaMaiorQue10() {
    $arr = ["carro" => 500000, "anel" => 5, "boneca" => 20, "feijão" => 5.99];
    $itens = [];
    foreach($arr as $item => $preco) {
        if($preco > 10){
            array_push($itens, $item);
        }
    }
    return $itens;
}

$novoArr = retornaMaiorQue10($arr);

print_r($novoArr);