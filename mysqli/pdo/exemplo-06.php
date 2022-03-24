<?php

    // Conexão com o SQLI ⬇
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

    // Inicia uma transação
    $conn -> beginTransaction(); // Para executar UPDATE e DELETE com segurança

    // Prepare para o DELETE dos valores das tabelas do banco de dados
    $stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
    // Qual a coluna e qual o valor que ela recebe

    $id = 2;

    $stmt -> execute(array($id)); // Executa a Insersão dos valores

    // Cancela a transação
    // $conn -> rollBack();

    // Confirma a transação
    $commit = $conn -> commit();

    if ($commit === true) {
        echo "Delete confirmado!<br><br>";
    }

    echo "Dados deletados!";

?>