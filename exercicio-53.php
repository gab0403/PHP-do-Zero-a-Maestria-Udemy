<?php

class Animal {

    function latir() {
        echo "AU AUAUAUAUAUAUAUUAUA";
    }

    function andar() {
        echo "andando";
    }
}

$cachorro = new Animal;

$cachorro -> latir();
$cachorro -> andar();
