<?php

    // Não vai mostrar erros e nem Warnings

    error_reporting(E_ALL & ~E_WARNING);

    $nome = $_GET["nome"];

    echo $nome;

?>