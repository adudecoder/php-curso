<?php

    class Pessoa {

        public $nome; // ATRIBUTO

        public function falar() { // METODO

            return "O meu nome é ".$this -> nome;

        }

    }

    $victor = new Pessoa();
    $victor -> nome = "Victor Martins";
    echo $victor -> falar();

?>