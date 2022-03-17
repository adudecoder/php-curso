<?php

    spl_autoload_register(function ($nomeClasse) {

        var_dump($nomeClasse);
        require_once "$nomeClasse.php";

    });

    //

    $carro = new SilviaS15();

    $carro -> acelerar(80);

?>