<?php

    $cep = "01310100";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);

    // 1 significa que vc quer um retorno que foi mandado, 0 seria false que não vai te retornar a solicitação
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Validação SSL de orgão

    $response = curl_exec($ch);

    curl_close($ch); // Para pq já recebi a resposta e já terminei

    $data = json_decode($response, true); // Pegar o json e tranformar ele em um array

    // PRINT_R para exibir um array
    print_r($data);

    // Vc tem acesso a qualquer chave do CEP por exemplo caso queira só a cidade, vc deve usar 
    // PRINT_R($data["localidade"])

?>