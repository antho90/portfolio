<?php

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {


    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"PrimFX.com"<support@primfx.com>' . "\n";
    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';
    $to = 'anthonychxtelxt@gmail.com';

    $subject = 'Nouveau message Portfolio';

    $message = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional/EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitionaldtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style type="text/css">
        body {
            margin: 0;
        }
        table {
            border-spacing: 0;
        }
        td {
            padding: 0;
        }
        img {
            border: 0;
            display: block;
        }

        .wrapper{
            width: 100%;
            table-layout: fixed;
            padding-bottom: 40px;
        }

        .main{
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: sans-serif;
        }
    </style>
    </head>
    <body>
            
    <center class="weapper">

    <table class="main" width="100%">
    
<!-- Titre -->
  <tr>
    <td>
        <table width="100%">
            <tr>
                <td style="text-align: center;padding: 15px;">
                    <p style="font-size: 24px; font-weight: bold;">
                        Nouveau message !!
                    </p>
                </td>
            </tr>
        </table>
    </td>
</tr>

<!-- Image -->
        <tr>
            <td>
                <img src="https://image.freepik.com/free-vector/email-campaign-concept-illustration_114360-1633.jpg" alt="bannière" width="600" style="max-width: 100%;">
            </td>
        </tr>


<!-- Message -->
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td>
                            <td style="text-align: center;padding: 45px;">
                                <p style="font-size: 18px; line-height: 24px; padding-bottom: 30px;">
                                Message de la part de <span style="font-weight: bold;">' . $_POST["name"] . ' </span> <br><br> ' . $_POST["message"] . ' <br><br> Email de contact : ' . $_POST["email"] . '
                                </p>
                            </td>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>
    </body>
</html>
';
    if (mail($to, $subject, $message, $header)) {
        echo json_encode(['message' => 'Votre mail a bien été envoyé']);
    } else {
        echo json_encode(['error' => 'Il y eu une erreur lors de l\'envoie du mail']);
    }
} else {
    echo json_encode(['error' => 'Vous devez rentrer une adresse mail valide']);
}
