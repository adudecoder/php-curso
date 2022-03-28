<?php

    // Download de arquivos com file_get_contents

    // URL do arquivo
    $link = "https://skycms.s3.amazonaws.com/images/5495100/cachorro-card-1.png";

    // Ler o BINARIO do arquivo
    $content = file_get_contents($link);

    // Ver o conteudo do arquivo
    $parse = parse_url($link);

    // Ver o nome do arquivo
    $basename = basename($parse["path"]);

    // Criar o arquivo dentro do servidor
    $file = fopen($basename, "w+"); // Gerando o nome do arquivo

    // Ler o arquivo formatado
    fwrite($file, $content); // Onde ta escrevendo no disco rigido

    fclose($file); // Fecha o arquivo

?>

<!-- O igual( = ) substitui o comando ECHO -->
<img src="<?=$basename?>" />