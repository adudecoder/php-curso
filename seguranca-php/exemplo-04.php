<?php

    // ReCaptcha

?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form action="cadastrar.php" method="post">

    <input type="email" name="inputEmail" />
    <button type="submit">Enviar</button>
    <div class="g-recaptcha" data-sitekey="6LfjszgfAAAAAB7HUIJSOUm3XnemPMvhPStPSkJ1"></div> <!--Public Key-->

</form>