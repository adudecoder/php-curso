<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad -> setNome("Victor Martins");
    $cad -> setEmail("victor@gmail.com.br");
    $cad -> setSenha("123456");

    $cad -> registrarVenda();

?>