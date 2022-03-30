<?php

    // GERAR IMAGEM DE UMA JÁ EXISTENTE

    $image = imagecreatefromjpeg("img/certificado.jpg"); // Caminho da img já existente

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($image, 5, 440, 350, "Victor Martins", $titleColor);
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

    header("Content-Type: image/jpeg");

    // Imagem vai ser baixada no mesmo diretorio, com nome, data, tipo, e qualidade da imagem de uma escala de 0 - 100
    imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);

    imagedestroy($image);

?>