<?php

class Carro {

    public $velocidadeMaxima;

    function setVelocidadeMaxima($velocidadeMaxima) {
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    function getVelocidadeMaxima(){
       echo $this->velocidadeMaxima;
    }
}

$carro = new Carro;
$carro->setVelocidadeMaxima(300);
$carro->getVelocidadeMaxima();