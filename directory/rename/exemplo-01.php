<?php

    // MOVENDO e RENOMEANDO arquivo

    $dir1 = "folder_01"; // PASTA 1
    $dir2 = "folder_02"; // PASTA 2

    if (!is_dir($dir1)) mkdir($dir1); // Se não existir a PASTA 1 então crie ela
    if (!is_dir($dir2)) mkdir($dir2); // Se não existir a PASTA 2 então crie ela

    $filename = "README.txt"; // Arquivo

    if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) { // Se não existir o arquivo na pasta 1 então crie ele

        $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+"); // Abrindo a pasta 1 e depois o arquivo pra escrever

        fwrite($file, date("Y-m-d H:i")); // Escrevendo a data dentro do arquivo

        fclose($file); // Fechando arquivo

    }

    rename( // Função RENAME para mover arquivo de um diretorio para outro, e permite renomea-lo caso seja movido para o mesmo diretorio
        $dir1 . DIRECTORY_SEPARATOR . $filename, // Onde ta
        $dir2 . DIRECTORY_SEPARATOR . $filename // Pra onde vai
    );

    echo "Arquivo movido com sucesso!";

?>