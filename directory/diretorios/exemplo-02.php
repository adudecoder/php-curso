<?php

    $images = scandir("images"); // Retorna um array

    $data = array();

    foreach ($images as $img) {

        if (!in_array($img, array(".", ".."))) { //in_array faz uma busca dentro do array

            $filename = "images" . DIRECTORY_SEPARATOR . $img;

            $info = pathinfo($filename); // pathinfo ver informações dos arquivos

            $info["size"] = filesize($filename); // filezise para ver o tamanho dos arquivos em BITS
            $info["modified"] = date("d/m/Y H:i", filemtime($filename)); // função para quando o arquivo for modificado
            $info["url"] = "http://localhost/curso-php/directory/".str_replace("\\", "/", $filename); // acessar o arquivo via URL

            array_push($data, $info);

        }

    }

    echo json_encode($data);

?>