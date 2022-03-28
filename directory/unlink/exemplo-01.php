<?php

    // Função UNLINK

    $file = fopen("teste.txt", "w+");

    fclose($file);

    // UNLINK pode excluir arquivos e diretorios
    unlink("teste.txt"); // Vc pode colocar o nome do arquivo diretamente

    echo "arquivo removido com sucesso!";

?>