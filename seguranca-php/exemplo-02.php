<?php

    // Evitar SQL INJECTION

    $id = (isset($_GET["id"])) ? $_GET["id"] : 1;

    // Um dos modos de se evitar, porém sempre mantenha as boas praticas usando PDO para evitar totalmente o SQL INJECTION
    if (!is_numeric($id) || strlen($id) > 5) {
        exit("Se fudeu!");
    }

    $conn = mysqli_connect("localhost", "root", "", "dbphp7");

    $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

    $exec = mysqli_query($conn, $sql);

    while ($resultado = mysqli_fetch_object($exec)) {

        // echo $resultado -> deslogin . "<br>";
        var_dump($resultado);

    }

?>