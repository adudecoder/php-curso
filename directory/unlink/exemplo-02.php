<?php

    // Apagar arquivos dentro de um diretorio

    if (!is_dir("img")) mkdir("img");

    foreach (scandir("img") as $item) { // SCANDIR, lê um diretorio e tranforma ele em um array
        
        if (!in_array($item, array(".", ".."))) { // Apagar arquivo por arquivo

            unlink("img/" . $item); // UNLINK pode excluir arquivos e diretorios

        }

    }

    echo "OK";

?>