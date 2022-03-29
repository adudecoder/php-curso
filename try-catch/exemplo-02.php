<?php

    function trataNome($name) {

        if (!$name) {

            throw new Exception("Nenhum nome foi informado.", 1);

        }

        echo ucfirst($name)."<br>";

    }

    try {
        
        trataNome("João");
        trataNome("");

    } catch (Exception $e) {
        
        echo $e -> getMessage();

    } finally { // Bloco FINALLY é opcional

        echo "Executou o Try!";

    }

?>