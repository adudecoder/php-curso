
<!-- ENCTYPE será enviado como padrões BINARIOS, não é apenas STRING que vc ta enviando -->
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Send</button>

</form>

    <!-- UPLOAD de arquivos -->

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $file = $_FILES["fileUpload"];

        if ($file["error"]) {

            throw new Exception("Error: ".$file["error"]);

        }

        $dirUpload = "img"; // Cria a pasta

        if (!is_dir($dirUpload)) {

            mkdir($dirUpload);

        }

        if (move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])) {

            echo "Upload realizado com sucesso!";

        } else {

            throw new Exception("Não foi possivel realizar o upload");

        }

    }

?>