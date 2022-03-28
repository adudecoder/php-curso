<?php

    // CRIAR UM DIRETORIO CASO ELE NÃO EXISTA

    $name = "images";

    if (!is_dir($name)) { // Verifica se o diretório não existe

        mkdir($name); // MKDIR Cria o diretório
        echo "Diretório ($name) criado com sucesso!";

    } else {

        rmdir($name); // RMDIR Remove o diretório
        echo "Já existe o diretório ($name), e ele foi removido!";

    }

?>