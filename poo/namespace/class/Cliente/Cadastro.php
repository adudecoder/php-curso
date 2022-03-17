<?php

    namespace Cliente;

    class Cadastro extends \Cadastro // Vai na raiz com a contra barra para herdar os atributos e metodos da classe cadastro
    {

        public function registrarVenda() {

            echo "Foi registrada uma venda para o cliente ".$this -> getNome();

        }

    }

?>