<?php

    // Evitar Command Injection

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {

        // $cmd = $_POST["cmd"]; <-- Aqui ele ta totalemten vuneravel, e para evitar isso se usa uma função chamada escapeshellcmd(), e qualquer outra requisição com POST vai escapar e não será executado

        $cmd = escapeshellcmd($_POST["cmd"]); // Modo correto

        var_dump($cmd);

        echo "<pre>";
            $comando = system($cmd, $retorno);
        echo "</pre>";

    }

    // Toda vez que vc for executar um comando SYSTEM, EXEC ou SHELL EXEC, nunca receba dados dinamicos, use escapeshellargs() ou escapeshellcmd()

?>

<form method="POST">

    <input type="text" name="cmd" />
    <button type="submit">Enviar</button>

</form>