<?php

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {


    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"PrimFX.com"<support@primfx.com>' . "\n";
    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';
    $to = 'anthonychxtelxt@gmail.com';

    $message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional/EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitionaldtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
            <p>
                Message de la part de ' . $_POST["name"] . ' <br><br> ' . $_POST["message"] . ' <br><br> Email de contact : ' . $_POST["email"] . '
            </p>
    </body>
</html>
';
    if (mail($to, $subject, $message, $header)) {
        echo json_encode(['message' => 'Votre mail a bien été envoyé']);
        // header("Location: index.php");
    } else {
        echo json_encode(['error' => 'Il y eu une erreur lors de l\'envoie du mail']);
    }
} else {
    echo json_encode(['error' => 'Vous devez rentrer une adresse mail valide']);
}
