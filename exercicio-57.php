<?php

class Cachorro {

    public $raca;
    public $idade;
    public $nome;
    public $cor;
    
    function __construct($raca, $idade, $nome, $cor) {
        $this->raca = $raca;
        $this->idade = $idade;
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function caracCachorro() {
        echo "Olá, eu sou o $this->nome tenho $this->idade anos, sou da raça $this->raca e sou $this->cor .";
    }
}

$cachorro = new Cachorro("pincher", 2, "pit", "marrom");
$cachorro->caracCachorro();
