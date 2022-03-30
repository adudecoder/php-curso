<?php

    // UTILIZANDO FONTES DIFERENTES DO PADRÃO DO SISTEMA

    $image = imagecreatefromjpeg("img/certificado.jpg"); // Caminho da img já existente

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    // Depois do 32 temos agora o angula pra deixar na vertical ou diagonal
    // E temos o caminho da fonte antes do nome da imagem
    imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
    imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Victor Martins");

    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

    header("Content-Type: image/jpeg");

    // Imagem vai ser baixada no mesmo diretorio, com nome, data, tipo, e qualidade da imagem de uma escala de 0 - 100
    imagejpeg($image);

    imagedestroy($image);

?>