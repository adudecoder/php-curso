<?php

    // Conexão com o SQL SERVER
    // $conn = new PDO("sqlsrv:Database=dbphphcode;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); // Conexão com o SQLI

    // Prepare para o INSERT dos valores das tabelas do banco de dados
    $stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

    $login = "Victoria";
    $password = "meninaGamer";

    // Statement(STMT) uma instrução completa para o computador executar
    $stmt -> bindParam(":LOGIN", $login); // BindParam Vincula um parâmetro ao nome da variável especificada
    $stmt -> bindParam(":PASSWORD", $password);

    $stmt -> execute(); // Executa a Insersão dos valores

    echo "Insersão OK!";

?>