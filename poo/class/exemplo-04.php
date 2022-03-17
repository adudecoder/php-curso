<?php

    // MÉTODO CONSTRUTOR


    class Endereco
    {

        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c) // NÃO NECESSARIAMENTE É PRECISO PASSAR OS MESMO NOMES DOS ATRIBUTOS
        {
            
            $this -> logradouro = $a;
            $this -> numero = $b;
            $this -> cidade = $c;

        }

        public function __destruct()
        {
            
            // var_dump("DESTRUIR");

        }

        public function __toString()
        {
            
            return $this -> logradouro.", ".$this -> numero." - ".$this -> cidade;

        }

    }

    $meuEndereco = new Endereco("Rua só louco vai", "1011", "Guarulhos");

    echo $meuEndereco;

    // var_dump($meuEndereco);

    // unset($meuEndereco);

?>