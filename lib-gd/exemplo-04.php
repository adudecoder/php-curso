<?php

    // GERANDO MINIATURA DE IMAGEM

    header("Content-Type: image/jpeg");

    $file = "img".DIRECTORY_SEPARATOR."wallpaper.jpg";

    $new_width = 256; // Largura
    $new_height = 256; // Altura

    $data = getimagesize($file); // Obtém o tamanho de uma imagem

    // Altura e Largura ATUAL
    list($old_width, $old_height) = getimagesize($file);

    // IMAGECREATETRUECOLOR paleta de 16 milhões de cores
    $new_image = imagecreatetruecolor($new_width, $new_height); // Essa já vai ser nova miniatura
    $old_image = imagecreatefromjpeg($file); // Crie uma imagem apartir da original

    // PARAMETROS
    // 1° - Imagem destino
    // 2° - Imagem de origem

    // PONTO DE INICIO DO EIXO X E Y
    // 3° - Dimensão X destino 
    // 4° - Dimensão Y destino

    // 5° - Dimensão X origem
    // 6° - Dimensão Y origem

    // 7° - Altura destino 
    // 8° - Largura destino

    // 9° - Altura origem 
    // 10° - Largura origem
    imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

    imagejpeg($new_image); // Gerar a imagem

    // Limpar da memoria
    imagedestroy($old_image);
    imagedestroy($new_image);

?>