<?php

    // FILE_GET_CONTENTS outra função para ler arquivos
    // Pegar um arquivo BINARIO e tranformar em base64

    $filename = "images/html5.png";

    // Faz todo o file open, file read, file since e o file close
    $base64 = base64_encode(file_get_contents($filename)); // Retorna um conteúdo BINARIO
    // base64_encode converte de BINARIO para STRING

    // FileInfo classe interna para pegar informções do tipo do arquivo
    $fileinfo = new finfo(FILEINFO_MIME_TYPE);

    $mimetype = $fileinfo -> file($filename);

    // Padrão de exibição do base64
    // echo "data:image/png;base64," . $base64;
    $base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>

<img src="<?=$base64encode?>" alt="">