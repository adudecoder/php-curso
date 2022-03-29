<?php

    // Retornar um json com um erro

    function error_handler($code, $message, $file, $line) {

        echo json_encode(array(

            "code" => $code,
            "message" => $message,
            "file" => $file,
            "line" => $line

        ));

    }

    set_error_handler("error_handler"); // Espera o nome da função que vai manipular esse erro, como é o NOME da função vc tem que passar uma string
    
    $nome = $_GET["nome"];
    echo $nome;
    

?>