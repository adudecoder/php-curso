<?php

    // ENCAPSULAMENTO

    // PUBLIC todo mundo tem acesso
    // PROTECTED a mesma classe ou uma classe extendida tem acesso
    // PRIVATE só a mesma classe tem acesso 

    class Pessoa
    {

        public $nome = "Rasmus Lerdorf";
        protected $idade = 48;
        private $senha = "123456";

        public function verDados() {

            echo $this -> nome . "<br>";
            echo $this -> idade . "<br>";
            echo $this -> senha . "<br>";

        }

    }

    class Programador extends Pessoa
    {

        public function verDados() {

            echo get_class($this) . "<br>";

            echo $this -> nome . "<br>";
            echo $this -> idade . "<br>";
            echo $this -> senha . "<br>";

        }

    }

    $objeto = new Programador();

    // echo $objeto -> senha . "<br>";

    $objeto -> verDados();

?>