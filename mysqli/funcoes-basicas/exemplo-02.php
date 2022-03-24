<?php

    // 1°-IP, 2°-USUARIO, 3°-SENHA, 4°-BANCO
    $conn = new mysqli("localhost", "root", "", "dbphp7");

    if ($conn -> connect_error) {

        echo "ERROR: " . $conn -> connect_error;

    }

    $result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $data = array();

    while ($row = $result -> fetch_assoc()) {

        array_push($data, $row);

    }

    echo json_encode($data);
 
?>