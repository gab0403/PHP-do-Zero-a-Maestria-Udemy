<?php

class Humano {

    public $nome;
    public $idade;
    public $corFavorita;


    function falar() {
        echo "Olá pessoal";
    }
}

class Professor extends Humano {
    public $turma;
    public $escola;
    public $especializacao;

    function darAula() {
        echo "blablablabla";
    }


}
$humano = new Humano;
$professor = new Professor;

$humano->falar();

$professor->falar();

$professor->darAula();