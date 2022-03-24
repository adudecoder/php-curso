<?php

    // Conexão com o SQL SERVER ⬇
    $conn = new PDO("sqlsrv:Database=dbphphcode;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

    // Conexão com o SQLI ⬇
    // $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    // Prepare para o UPDATE dos valores das tabelas do banco de dados
    $stmt = $conn -> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
    // Qual a coluna e qual o valor que ela recebe

    $login = "Marcos Leite";
    $password = "Bolsonaro";
    $id = 2;

    // Statement(STMT) uma instrução completa para o computador executar
    $stmt -> bindParam(":LOGIN", $login); // BindParam Vincula um parâmetro ao nome da variável especificada. Para cada valor um BindParam
    $stmt -> bindParam(":PASSWORD", $password);
    $stmt -> bindParam(":ID", $id);

    $stmt -> execute(); // Executa a Insersão dos valores

    echo "Dados alterados com sucesso!";

?>