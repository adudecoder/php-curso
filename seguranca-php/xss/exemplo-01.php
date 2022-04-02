<form method="POST">

    <input type="text" name="busca" />
    <button type="submit">Enviar</button>

</form>

<?php

    // EVITAR ATAQUES CROSS-SITE_SCRIPTING_(xss) 

    $_POST['busca'] = '<a href="#"> <strong>Lets go</strong> </a> <script>alert("ok")</script>';

    if (isset($_POST['busca'])) {

        // echo $_POST['busca']; // Sem proteção

        // Função STRIP_TAGS remove todas as tags, mas vc pode ter exeções passando um parametro
        // echo strip_tags($_POST['busca'], "<strong>"); // Com proteção

        // Se vc não quiser remover as tags mas sim mostrar todo o HTML usamos a função HTMLENTITIES
        echo htmlentities($_POST['busca']);

    }

?>