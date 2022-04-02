<?php

    // EVITAR ATAQUES A SESSÕES
    session_start();

    // Depois de verificar login e senha reinicie o ID da sessão
    session_destroy(); // Destroi a sessão

    session_start(); // Reinicia a sessão

    session_regenerate_id(); // Gerar o novo ID de sessão    

    echo session_id();

?>