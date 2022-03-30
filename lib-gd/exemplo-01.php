<?php

    // Mudar o tipo de resposta desse arquivo
    header("Content-Type: image/png");

    // Função IMAGECREATE recebe a altura e largura
    $image = imagecreate(256, 256); // $image é uma variavel resource

    // Criar uma paleta de cores
    // A primeira cor que vc cria, vira a cor de fundo
    $black = imagecolorallocate($image, 0, 0, 0); // Padrão RGB (red, green, blue)
    $red = imagecolorallocate($image, 255, 0, 0); // O maximo é 255

    // Escrever alguma coisa na tela
    imagestring($image, 5, 60, 120, "Curso de PHP7", $red); // 1° - Imagem, 2° - Tamnho da fonte de 1 a 5, 3° - Largura e Altura separados por virgula, 4° - Frase, 5° - Cor

    // Qual é o formato que ele tem que gerar, no caso é png pq ta relacionado ao header da linha 3
    imagepng($image); // É nessa hora que o PHP redenriza o que vc programou

    // Destruir a variavel resource, igual como se fecha um arquivo, se não ela fica pindura no PHP
    imagedestroy($image);

?>