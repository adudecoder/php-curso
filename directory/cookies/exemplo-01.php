<?php

    // ARQUIVO QUE CRIA O COOKIE

    $data = array(
        "empresa" => "Hcode Treinamentos"
    );

    // Na função SETCOOKIE vc vai passar o nome do cookie, um array com os dados que serão guardados, e a duração do cookie com timeStamp + os segundos
    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

    echo "OK";

?>