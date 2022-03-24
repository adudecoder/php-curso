<?php

    // 1°-IP, 2°-USUARIO, 3°-SENHA, 4°-BANCO
    $conn = new mysqli("localhost", "root", "", "dbphp7");

    if ($conn -> connect_error) {

        echo "ERROR: " . $conn -> connect_error;

    }

    $stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

    $login = "user";
    $pass = "12345";

    $stmt -> bind_param("ss", $login, $pass);

    $stmt -> execute();

    $login = "root";
    $pass = "007";

    $stmt -> execute();

?>