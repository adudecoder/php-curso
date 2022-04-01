<?php

    require_once("vendor/autoload.php");

    // namespace
    use Rain\Tpl;

    // config
    $config = array(
        "tpl_dir"       => "tpl/",
        "cache_dir"     => "cache/",
        // "debug"         => true, // set to false to improve the speed
    );

    Tpl::configure( $config );


    // Add PathReplace plugin (necessary to load the CSS with path replace)
    // Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


    // create the Tpl object
    $tpl = new Tpl;

    // assign a variable
    $tpl -> assign( "name", "Curso PHP" );
    $tpl -> assign( "version", PHP_VERSION );

    // assign an array
    // $tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

    // draw the template
    $html = $tpl -> draw( "index", true); // Precisa ser true, caso contrario da um echo na tela e acabou seu código
    // Faz um return para sua variavel $html

    // PHPMAILER
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->Host = 'smtp.office365.com';

    $mail->Port = 587;

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->SMTPAuth = true;

    $mail->Username = '';

    $mail->Password = '';

    $mail->setFrom('', 'Mr.Desenvolvedor');

    $mail->addAddress('', '');

    $mail->Subject = 'Teste de RainTPL com PHPMailer';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($html); // Mudanças conectadas a linha 33
    // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

    $mail->AltBody = 'This is a plain-text message body';

    if (!$mail->send()) {

        echo 'Mailer Error: ' . $mail->ErrorInfo;

    } else {

        echo 'Message sent!';

    }

?>