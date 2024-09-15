<?php

function defineCorCarro($cor = "vermelho"){
    return "A cor do carro é $cor.";
}

echo defineCorCarro() . "<br>";

echo defineCorCarro("rosa");