<?php

    // FOPEN para criar arquivos

    // Função FOPEN espera dois parametros, f sempre pra file e depois o que vc quer fazer com o arquivo W+ é arquivo de escrita
    $file = fopen("log.txt", "w+"); 
    // A variavel $file é do tipo RESOURCE que faz referencia a um arquivo externo

    // Espera dois parametros, primeiro o RESOURCE, segundo os dados para serem colocados dentro
    fwrite($file, date("Y-m-d H:i") . "\r\n"); // Função para escrever dentro do arquivo

    // Função para fechar o arquivo
    fclose($file); // Esperando o RESOURCE

    echo "Arquivo criado com sucesso!";

?>