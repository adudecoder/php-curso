<?php

    // Ler conteúdo de arquivos

    $filename = "usuarios.csv";

    if (file_exists($filename)) {

        $file = fopen($filename, "r"); // R para leitura de arquivos

        // EXPLODE retorna um ARRAY explodido nas vergulas
        $headers = explode(",", fgets($file)); // FGETS pega só a primeira linha do arquivo

        $data = array(); // Variavel PRINCIPAL

        while ($row = fgets($file)) {

            $rowData = explode(",", $row);
            $linha = array();

            for ($i = 0; $i < count($headers); $i++) {

                $linha[$headers[$i]] = $rowData[$i];

            }

            // Adicione na variavel $DATA a variavel $LINHA
            array_push($data, $linha);

        }

        fclose($file); // SEMPRE usar o FCLOSE para fechar o arquivo e não deixar ele aberto na memoria

        echo json_encode($data);

    }

?>