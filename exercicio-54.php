<?php

class Pessoa {

    public $nome = "Roberta";
    public $idade = 50;

    function andar() {
        echo "andando";
    }
}

$pessoa = new Pessoa;

echo $pessoa -> nome;
echo $pessoa -> idade;
$pessoa -> andar();
