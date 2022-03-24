<?php

    // Conexão com o SQL SERVER ⬇
    $conn = new PDO("sqlsrv:Database=dbphphcode;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

    // Conexão com o SQLI ⬇
    // $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    // Prepare para o DELETE dos valores das tabelas do banco de dados
    $stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
    // Qual a coluna e qual o valor que ela recebe

    $id = 1002;

    // Statement(STMT) uma instrução completa para o computador executar
    $stmt -> bindParam(":ID", $id);

    $stmt -> execute(); // Executa a Insersão dos valores

    echo "Dados deletados!";

?>