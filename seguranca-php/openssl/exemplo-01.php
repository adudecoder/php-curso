<?php

    // Chave SECRET_IV, 16bits, senha
    define('SECRET_IV', pack('a16', 'senha'));
    define('SECRET', pack('a16', 'senha'));

    $data = [ // Array com informação para ser encryptado
        "nome" => "Hcode"
    ];

    $openssl = openssl_encrypt(

        json_encode($data), // Encryptar a string
        'AES-128-CBC',      // Algoritmo que vai ser usado
        SECRET,             // Chave
        0,                  // Um lista de opções, deixando zero ele não precisa retornar nada além da cryptografia
        SECRET_IV           // Senha

    );

    echo $openssl;

    // Decrypt
    $string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

    var_dump(json_decode($string, true));

?>