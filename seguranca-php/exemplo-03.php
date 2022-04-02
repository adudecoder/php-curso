<?php

    // ENTENDENDO AS PERMISSÕES DE PASTAS

    $pasta = "arquivos";
    $permissao = "0775"; // Permissão unix 0775

    // MKDIR tem um parametro opcional que seria a permissão do diretório
    if (is_dir($pasta)) mkdir($pasta, $permissao);
    // As permissões vão de 0 - 7
    // 0 = Sem permissão
    // 1 = Permissão de execução
    // 2 = Permissão de gravação
    // 3 = Mix permissão 1 + 2
    // 4 = Permissão de leitura
    // 5 = Mix permissão 4 + 1
    // 6 = Mix permissão 4 + 2
    // 7 = Mix permissão 4 + 1 + 2

    echo "Diretório criado com sucesso!";

?>